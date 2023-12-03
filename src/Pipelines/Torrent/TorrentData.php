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
 */
class TorrentData
{
    use HasData;
}
