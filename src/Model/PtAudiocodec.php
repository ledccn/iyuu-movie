<?php

namespace Iyuu\Movie\Model;

use plugin\admin\app\model\Base;

/**
 * @property integer $audiocodec_id 主键(主键)
 * @property string $content 值
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class PtAudiocodec extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pt_audiocodec';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'audiocodec_id';

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
}
