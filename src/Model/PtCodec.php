<?php

namespace Iyuu\Movie\Model;

use plugin\admin\app\model\Base;

/**
 * @property integer $codec_id 主键(主键)
 * @property string $content 值
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class PtCodec extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pt_codec';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'codec_id';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    
    
}
