<?php

namespace Iyuu\Movie\Model;

use Illuminate\Database\Eloquent\Builder;
use Iyuu\Movie\Support\BaseModel;

/**
 * 语言关系表
 * @property integer $id 主键(主键)
 * @property integer $lang_id 外键
 * @property integer $subject_id 外键
 * @property string $create_time 创建时间
 */
class MetaLanguagesRelation extends BaseModel
{
    /**
     * The table associated with the Model.
     *
     * @var string
     */
    protected $table = 'meta_languages_relation';

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
     * @param int $lang_id 影视语言主键
     * @param int $subject_id 影视条目主键
     * @return int[]
     */
    public static function uniqueWhere(int $lang_id, int $subject_id): array
    {
        return [
            'lang_id' => $lang_id,
            'subject_id' => $subject_id,
        ];
    }

    /**
     * 获取模型
     * @param int $lang_id 影视语言主键
     * @param int $subject_id 影视条目主键
     * @return Builder|self|null
     */
    public static function getModelByUnique(int $lang_id, int $subject_id): self|Builder|null
    {
        return static::where(self::uniqueWhere($lang_id, $subject_id))->first();
    }
}
