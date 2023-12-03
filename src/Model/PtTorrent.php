<?php

namespace Iyuu\Movie\Model;

use Illuminate\Database\Eloquent\Builder;
use plugin\admin\app\model\Base;

/**
 * @property integer $id 主键(主键)
 * @property integer $sid 站点
 * @property integer $torrent_id 种子ID
 * @property integer $group_id 分组ID
 * @property integer $category 分类
 * @property integer $medium 媒介
 * @property integer $codec 视频编码
 * @property integer $audiocodec 音频编码
 * @property integer $standard 分辨率
 * @property integer $team 制作组
 * @property integer $level 分级(观看年龄)
 * @property integer $is_subject 是条目
 * @property string $uri 统一资源标识符
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class PtTorrent extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pt_torrents';
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

    /**
     * 不能批量赋值的属性
     * - The attributes that aren't mass assignable.
     * @var array<string>|bool
     */
    protected $guarded = [];

    /**
     * 唯一约束：查询条件
     * @param int $sid
     * @param int $torrent_id
     * @return array
     */
    public static function uniqueWhere(int $sid, int $torrent_id): array
    {
        return [
            'sid' => $sid,
            'torrent_id' => $torrent_id
        ];
    }

    /**
     * 获取模型
     * @param int $sid
     * @param int $torrent_id
     * @return Builder|self|null
     */
    public static function uniqueModel(int $sid, int $torrent_id): self|Builder|null
    {
        return static::where(self::uniqueWhere($sid, $torrent_id))->first();
    }
}
