<?php

namespace Iyuu\Movie\Dispatch;

use Illuminate\Database\Eloquent\Builder;
use Iyuu\Movie\Support\BaseModel;

/**
 * @property int $id ID(主键)
 * @property int $type 主类型
 * @property int $subtype 子类型
 * @property int $unique_id 唯一标识
 * @property string $payload 有效载荷
 * @property int $state 状态
 * @property int $dispatch_time 调度时间
 * @property string $message 错误描述
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaDispatch extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_dispatch';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * The name of the "created at" column.
     *
     * @var string|null
     */
    const CREATED_AT = 'create_time';

    /**
     * The name of the "updated at" column.
     *
     * @var string|null
     */
    const UPDATED_AT = 'update_time';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * 唯一约束：查询条件
     * @param int $type 主类型
     * @param int $subtype 子类型
     * @param int $unique_id 唯一标识
     * @return int[]
     */
    public static function uniqueWhere(int $type, int $subtype, int $unique_id): array
    {
        return [
            'type' => $type,
            'subtype' => $subtype,
            'unique_id' => $unique_id,
        ];
    }

    /**
     * 获取模型
     * @param int $type 主类型
     * @param int $subtype 子类型
     * @param int $unique_id 唯一标识
     * @return Builder|self|null
     */
    public static function getModelByUnique(int $type, int $subtype, int $unique_id): self|Builder|null
    {
        return static::where(self::uniqueWhere($type, $subtype, $unique_id))->first();
    }
}
