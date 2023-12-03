<?php

namespace Iyuu\Movie\Model;

use plugin\admin\app\model\Base;

/**
 * @property integer $subtitle_id 主键(主键)
 * @property mixed $sha1 散列
 * @property string $subtitle 副标题
 * @property string $create_time 创建时间
 */
class PtSubtitle extends Base
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
    protected $table = 'pt_subtitle';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'subtitle_id';


}
