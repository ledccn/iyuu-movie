<?php

namespace Iyuu\Movie\Model;

use Illuminate\Database\Eloquent\Builder;
use Iyuu\Movie\Support\BaseModel;

/**
 * 演员名字关系表
 * @property integer $id 主键(主键)
 * @property integer $name_id 外建
 * @property integer $celebrity_id 外建
 * @property string $create_time 创建时间
 */
class MetaNameRelation extends BaseModel
{
    /**
     * The table associated with the Model.
     *
     * @var string
     */
    protected $table = 'meta_name_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * Indicates if the Model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 可批量赋值的属性
     * - The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [];

    /**
     * 不能批量赋值的属性
     * - The attributes that aren't mass assignable.
     * @var array<string>|bool
     */
    protected $guarded = [];

    /**
     * 唯一约束：查询条件
     * @param int $name_id 演员名字主键
     * @param int $celebrity_id 名人表主键
     * @return int[]
     */
    public static function uniqueWhere(int $name_id, int $celebrity_id): array
    {
        return [
            'name_id' => $name_id,
            'celebrity_id' => $celebrity_id
        ];
    }

    /**
     * 获取模型
     * @param int $name_id 演员名字主键
     * @param int $celebrity_id 名人表主键
     * @return Builder|self|null
     */
    public static function getModelByUnique(int $name_id, int $celebrity_id): self|Builder|null
    {
        return static::where(self::uniqueWhere($name_id, $celebrity_id))->first();
    }
}
