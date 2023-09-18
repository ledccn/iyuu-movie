<?php

namespace Iyuu\Movie\Model;

use Iyuu\Movie\Support\BaseModel;

/**
 * 追剧表
 * @property integer $id 主键(主键)
 * @property integer $user_id 用户ID
 * @property integer $subject_id 条目ID
 * @property integer $status 状态:0取消,1追
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class MetaSubjectAttent extends BaseModel
{
    /**
     * The table associated with the Model.
     *
     * @var string
     */
    protected $table = 'meta_subject_attent';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
