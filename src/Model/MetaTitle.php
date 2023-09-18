<?php

namespace Iyuu\Movie\Model;

use Iyuu\Movie\Support\BaseModel;

/**
 * 影视标题
 * @property integer $title_id 名称ID(主键)
 * @property string $title 影片名
 * @property string $sha1 散列（唯一）
 * @property string $create_time 创建时间
 */
class MetaTitle extends BaseModel
{
    /**
     * The table associated with the Model.
     *
     * @var string
     */
    protected $table = 'meta_title';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'title_id';
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
}
