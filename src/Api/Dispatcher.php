<?php
declare (strict_types=1);

namespace Iyuu\Movie\Api;

use Illuminate\Database\Eloquent\Collection;
use Iyuu\Movie\Dispatch\DispatcherLocker;
use Iyuu\Movie\Dispatch\MetaDispatch;
use Iyuu\Movie\Dispatch\RedisList;
use Iyuu\Movie\Dispatch\StateEnum;
use Iyuu\Movie\Dispatch\SubTypeEnum;
use Iyuu\Movie\Dispatch\TypeEnum;
use support\exception\BusinessException;

/**
 * 任务调度
 */
class Dispatcher
{
    /**
     * 创建
     * @param TypeEnum $type
     * @param SubTypeEnum $subTypeEnum
     * @param int $unique_id
     * @param string $payload
     * @return bool
     * @throws BusinessException
     */
    public static function create(TypeEnum $type, SubTypeEnum $subTypeEnum, int $unique_id, string $payload = ''): bool
    {
        $model = MetaDispatch::getModelByUnique($type->value, $subTypeEnum->value, $unique_id);
        if (!$model) {
            $key = $type->name . ':' . $subTypeEnum->name . ':' . $unique_id;
            $lock = DispatcherLocker::lock($key, 10, true);
            if (!$lock->acquire()) {
                throw new BusinessException('未获取到锁：' . $key, 405);
            }

            $model = new MetaDispatch();
            $model->type = $type->value;
            $model->subtype = $subTypeEnum->value;
            $model->unique_id = $unique_id;
            $model->payload = $payload;
            $model->state = StateEnum::Default->value;
            $success = $model->save();
            if (false === $success) {
                return false;
            }

            //压入队列
            $redisList = new RedisList($type, $subTypeEnum);
            self::push($model, $redisList);
        }
        return true;
    }

    /**
     * 单进程调度
     * @param callable $callable 回调函数（传入参数：1.主类型、2.子类型、3.队列长度）
     * @return void
     */
    public static function dispatch(callable $callable): void
    {
        foreach (TypeEnum::cases() as $type) {
            foreach (SubTypeEnum::cases() as $subTypeEnum) {
                $redisList = new RedisList($type, $subTypeEnum);
                if ($length = $redisList->length()) {
                    //群发：调度通知
                    call_user_func($callable, $type, $subTypeEnum, $length);
                } else {
                    //压入队列
                    $where = [
                        'type' => $type->value,
                        'subtype' => $subTypeEnum->value,
                        'state' => StateEnum::Default->value
                    ];
                    MetaDispatch::where($where)->where('dispatch_time', '<', time() - 30)
                        ->chunk(10, function (Collection $collection) use ($redisList) {
                            /** @var MetaDispatch $model */
                            foreach ($collection as $model) {
                                self::push($model, $redisList);
                            }
                        });
                }
            }
        }
    }

    /**
     * 将值插入到列表的尾部(最右边)
     * @param MetaDispatch $model
     * @param RedisList $redisList
     * @return void
     */
    protected static function push(MetaDispatch $model, RedisList $redisList): void
    {
        if ($redisList->push($model->unique_id, $model->payload)) {
            $model->dispatch_time = time();
            $model->save();
        }
    }

    /**
     * 弹出一个任务
     * @param TypeEnum $type
     * @param SubTypeEnum $subTypeEnum
     * @return array
     */
    public static function pop(TypeEnum $type, SubTypeEnum $subTypeEnum): array
    {
        $redisList = new RedisList($type, $subTypeEnum);
        if ($length = $redisList->length()) {
            $data = $redisList->pop();
            if (is_array($data)) {
                //附加：队列长度
                $data['_length'] = $length;
                return $data;
            }
        }

        return [];
    }

    /**
     * 错误
     * @param TypeEnum $type
     * @param SubTypeEnum $subTypeEnum
     * @param int $unique_id
     * @param string $message
     * @throws BusinessException
     */
    public static function error(TypeEnum $type, SubTypeEnum $subTypeEnum, int $unique_id, string $message): void
    {
        $model = self::getModel($type, $subTypeEnum, $unique_id);
        $model->state = StateEnum::Error->value;
        $model->message = $message;
        $model->save();
    }

    /**
     * 成功
     * @param TypeEnum $type
     * @param SubTypeEnum $subTypeEnum
     * @param int $unique_id
     * @throws BusinessException
     */
    public static function success(TypeEnum $type, SubTypeEnum $subTypeEnum, int $unique_id): void
    {
        $model = self::getModel($type, $subTypeEnum, $unique_id);
        $model->state = StateEnum::Success->value;
        $model->save();
    }

    /**
     * 删除
     * @param TypeEnum $type
     * @param SubTypeEnum $subTypeEnum
     * @param int $unique_id
     * @throws BusinessException
     */
    public static function delete(TypeEnum $type, SubTypeEnum $subTypeEnum, int $unique_id): void
    {
        $model = self::getModel($type, $subTypeEnum, $unique_id);
        $model->delete();
    }

    /**
     * 获取数据模型
     * @param TypeEnum $type
     * @param SubTypeEnum $subTypeEnum
     * @param int $unique_id
     * @return MetaDispatch
     * @throws BusinessException
     */
    protected static function getModel(TypeEnum $type, SubTypeEnum $subTypeEnum, int $unique_id): MetaDispatch
    {
        $model = MetaDispatch::getModelByUnique($type->value, $subTypeEnum->value, $unique_id);
        if (!$model) {
            throw new BusinessException('数据不存在');
        }
        return $model;
    }
}
