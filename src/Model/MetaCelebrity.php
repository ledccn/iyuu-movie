<?php

namespace Iyuu\Movie\Model;

use Illuminate\Database\Eloquent\Builder;
use Iyuu\Movie\Support\BaseModel;

/**
 * 名人表
 * @property integer $celebrity_id 主键(主键)
 * @property integer $sites_id 电影站点主键
 * @property integer $name_sn 第三方影人id
 * @property string $imdb_nm IMDB编号
 * @property string $name 外键：中文名
 * @property string $name_en 外键：英文名
 * @property string $aka 外键：更多中文名
 * @property string $aka_en 外键：更多英文名
 * @property integer $gender 性别：1男,2女
 * @property string $alt 条目页URL
 * @property string $avatars 影人头像
 * @property mixed $works 影人作品
 * @property integer $summary 外键：简介
 * @property string $birthday 出生日期
 * @property string $born_place 出生地
 * @property mixed $photos 影人剧照
 * @property string $website 官方网站
 * @property integer $state 状态
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaCelebrity extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_celebrity';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'celebrity_id';

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
     * @param int $sites_id 电影站点主键
     * @param int $name_sn 第三方影人id
     * @return int[]
     */
    public static function uniqueWhere(int $sites_id, int $name_sn): array
    {
        return [
            'sites_id' => $sites_id,
            'name_sn' => $name_sn
        ];
    }

    /**
     * 获取模型
     * @param int $sites_id 电影站点主键
     * @param int $name_sn 第三方影人id
     * @return Builder|self|null
     */
    public static function getModelByUnique(int $sites_id, int $name_sn): self|Builder|null
    {
        return static::where(self::uniqueWhere($sites_id, $name_sn))->first();
    }
}
