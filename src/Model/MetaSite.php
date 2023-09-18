<?php

namespace Iyuu\Movie\Model;

use Illuminate\Database\Eloquent\Builder;
use Iyuu\Movie\Constants\TableName;
use Iyuu\Movie\Support\BaseModel;
use support\Db;

/**
 * 元信息站点
 * @property integer $id 主键(主键)
 * @property string $name 名字（唯一值）
 * @property string $protocol 协议
 * @property string $domain 域名
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaSite extends BaseModel
{
    /**
     * The table associated with the Model.
     *
     * @var string
     */
    protected $table = 'meta_sites';

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
     * Indicates if the Model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * 哈希表存储键名
     * @return string
     */
    public static function buildHashTable(): string
    {
        return 'MetaModelHashTable:MetaSite';
    }

    /**
     * 唯一约束：查询条件
     * @param string $name
     * @return string[]
     */
    public static function uniqueWhere(string $name): array
    {
        return [
            'name' => $name
        ];
    }

    /**
     * 获取模型
     * @param string $name 站点名称
     * @return Builder|self|null
     */
    public static function getModelByName(string $name): self|Builder|null
    {
        return static::where(self::uniqueWhere($name))->first();
    }

    /**
     * 获取主键
     * @param string $name 站点名称
     * @return int|null
     */
    public static function getPkByName(string $name): ?int
    {
        return Db::table(TableName::meta_sites)->where(self::uniqueWhere($name))->value('id');
    }
}
