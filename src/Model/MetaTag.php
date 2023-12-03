<?php

namespace Iyuu\Movie\Model;

use Iyuu\Movie\Support\BaseModel;

/**
 * 标签
 * @property integer $tags_id 标签ID(主键)
 * @property string $value 值（唯一）
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaTag extends BaseModel
{
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
     * The table associated with the Model.
     *
     * @var string
     */
    protected $table = 'meta_tags';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'tags_id';
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
}
