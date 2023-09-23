<?php
declare (strict_types=1);

namespace Iyuu\Movie\Dispatch;

use support\Redis;

/**
 * Redis操作
 */
class RedisList
{
    /**
     * @var string
     */
    protected string $key;

    /**
     * 构造函数
     * @param TypeEnum $type
     * @param SubTypeEnum $subTypeEnum
     */
    public function __construct(protected TypeEnum $type, protected SubTypeEnum $subTypeEnum)
    {
        $this->key = __CLASS__ . ':' . $this->type->name . ':' . $this->subTypeEnum->name;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * 移除并获取列表的第一个元素
     * @return bool|array
     */
    public function pop(): bool|array
    {
        $json = Redis::lPop($this->key);
        return is_bool($json) ? $json : json_decode($json, true);
    }

    /**
     * 将值插入到列表的尾部(最右边)
     * @param int $unique_id
     * @param string $payload
     * @return bool|int
     */
    public function push(int $unique_id, string $payload): bool|int
    {
        //将一个或多个值插入到列表的尾部(最右边)
        return Redis::rPush($this->key, json_encode(compact('unique_id', 'payload')));
    }

    /**
     * 获取列表长度
     * @return int
     */
    public function length(): int
    {
        return Redis::lLen($this->key);
    }
}
