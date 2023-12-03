<?php

namespace Iyuu\Movie\Pipelines\Torrent;

use Iyuu\Movie\Model\PtTorrent;

/**
 * 种子：原始数据
 */
class Payload
{
    /**
     * 构造函数
     * @param PtTorrent $model
     * @param TorrentData $input
     */
    public function __construct(public PtTorrent $model, public TorrentData $input)
    {
    }
}
