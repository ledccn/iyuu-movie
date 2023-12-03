<?php

namespace Iyuu\Movie\Observer;

use plugin\admin\app\model\Base;

/**
 * @property integer $id 主键(主键)
 * @property integer $subject_id 条目PK
 * @property integer $pt_tid 种子PK
 * @property string $create_time 创建时间
 */
class PtSubjectRelation extends Base
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
    protected $table = 'pt_subject_relation';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';


}
