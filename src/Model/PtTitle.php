<?php

namespace Iyuu\Movie\Model;

use plugin\admin\app\model\Base;

/**
 * @property integer $title_id 主键(主键)
 * @property mixed $sha1 散列
 * @property string $title 主标题
 * @property string $create_time 创建时间
 */
class PtTitle extends Base
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
    protected $table = 'pt_title';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'title_id';


}
