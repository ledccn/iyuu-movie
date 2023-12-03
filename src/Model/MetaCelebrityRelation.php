<?php

namespace Iyuu\Movie\Model;

use Illuminate\Database\Eloquent\Builder;
use Iyuu\Movie\Support\BaseModel;

/**
 * 影视条目与影人关系
 * @property integer $id id(主键)
 * @property integer $subject_id 外键
 * @property integer $celebrity_id 外键
 * @property string $create_time 创建时间
 */
class MetaCelebrityRelation extends BaseModel
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_celebrity_relation';
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
     * @param int $subject_id 影视条目主键
     * @param int $celebrity_id 名人表主键
     * @return Builder|self|null
     */
    public static function getModelByUnique(int $subject_id, int $celebrity_id): self|Builder|null
    {
        return static::where(self::uniqueWhere($subject_id, $celebrity_id))->first();
    }

    /**
     * 唯一约束：查询条件
     * @param int $subject_id 影视条目主键
     * @param int $celebrity_id 名人表主键
     * @return int[]
     */
    public static function uniqueWhere(int $subject_id, int $celebrity_id): array
    {
        return [
            'subject_id' => $subject_id,
            'celebrity_id' => $celebrity_id
        ];
    }
}
