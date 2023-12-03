<?php

namespace Iyuu\Movie\Model;

use plugin\admin\app\model\Base;

/**
 * @property integer $team_id 主键(主键)
 * @property string $content 值
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class PtTeam extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pt_team';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'team_id';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    
    
}
