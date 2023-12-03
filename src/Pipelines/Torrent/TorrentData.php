<?php

namespace Iyuu\Movie\Pipelines\Torrent;

use Iyuu\Movie\Support\HasData;

/**
 * 种子数据
 * @property string $title 主标题
 * @property string $subtitle 副标题
 * @property string|int $sid 站点ID
 * @property string|int $torrent_id 种子ID
 * @property string|int $group_id 种子分组ID
 * @property string $tags 资源标签
 * @property string $category 分类
 * @property string $medium 媒介
 * @property string $codec 视频编码
 * @property string $audiocodec 音频编码
 * @property string $standard 分辨率
 * @property string $team 制作组
 * @property string|int $level 分级（适合观看的人员等级）年龄
 * @property string $uri 统一资源标识符
 * @property string $douban 豆瓣条目信息
 * @property string $imdb 豆瓣条目信息
 */
class TorrentData
{
    use HasData;
}
