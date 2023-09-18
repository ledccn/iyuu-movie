<?php

namespace Iyuu\Movie\Model;

use Iyuu\Movie\Support\BaseModel;

/**
 * IMDB条目
 * @property integer $id 主键(主键)
 * @property string $imdb IMDB（唯一）
 * @property integer $sn 数字编号
 * @property string $create_time 创建时间
 */
class MetaImdb extends BaseModel
{
    /**
     * The table associated with the Model.
     *
     * @var string
     */
    protected $table = 'meta_imdb';

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


}
