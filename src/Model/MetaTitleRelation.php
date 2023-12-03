<?php

namespace Iyuu\Movie\Model;

use Illuminate\Database\Eloquent\Builder;
use Iyuu\Movie\Support\BaseModel;

/**
 * 影视标题关系表
 * @property integer $id 主键(主键)
 * @property integer $title_id 外键
 * @property integer $subject_id 外键
 * @property string $create_time 创建时间
 */
class MetaTitleRelation extends BaseModel
{
    /**
     * Indicates if the Model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The table associated with the Model.
     *
     * @var string
     */
    protected $table = 'meta_title_relation';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
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
     * 获取模型
     * @param int $title_id 影视标题主键
     * @param int $subject_id 影视条目主键
     * @return Builder|self|null
     */
    public static function getModelByUnique(int $title_id, int $subject_id): self|Builder|null
    {
        return static::where(self::uniqueWhere($title_id, $subject_id))->first();
    }

    /**
     * 唯一约束：查询条件
     * @param int $title_id 影视标题主键
     * @param int $subject_id 影视条目主键
     * @return int[]
     */
    public static function uniqueWhere(int $title_id, int $subject_id): array
    {
        return [
            '$title_id' => $title_id,
            'subject_id' => $subject_id,
        ];
    }
}
