<?php

namespace Iyuu\Movie\Model;

use Iyuu\Movie\Support\BaseModel;

/**
 * 剧情简介
 * @property integer $id 主键(主键)
 * @property string $content 内容
 * @property mixed $sha1 哈希（唯一）
 * @property string $create_time 创建时间
 */
class MetaContent extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_content';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * Indicates if the model should be timestamped.
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
