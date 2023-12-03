<?php

namespace Iyuu\Movie\Services;

use Illuminate\Pipeline\Pipeline;
use Iyuu\Movie\Locker\TorrentLocker;
use Iyuu\Movie\Model\PtTorrent;
use Iyuu\Movie\Pipelines\Torrent\AudioCodecPipeline;
use Iyuu\Movie\Pipelines\Torrent\CategoryPipeline;
use Iyuu\Movie\Pipelines\Torrent\CodecPipeline;
use Iyuu\Movie\Pipelines\Torrent\MediumPipeline;
use Iyuu\Movie\Pipelines\Torrent\Payload;
use Iyuu\Movie\Pipelines\Torrent\StandardPipeline;
use Iyuu\Movie\Pipelines\Torrent\TeamPipeline;
use Iyuu\Movie\Pipelines\Torrent\TorrentData;
use plugin\admin\app\common\Util;
use support\exception\BusinessException;
use support\Log;
use Throwable;

/**
 * 种子服务
 */
class TorrentServices
{
    /**
     * 创建
     * @param TorrentData $input
     * @return PtTorrent
     * @throws BusinessException|Throwable
     */
    public static function create(TorrentData $input): PtTorrent
    {
        $sid = $input->sid;
        $torrent_id = $input->torrent_id;
        $lock = TorrentLocker::create($sid . ':' . $torrent_id, 10, true);
        if (!$lock->acquire()) {
            throw new BusinessException('触发创建锁');
        }

        $model = PtTorrent::uniqueModel($sid, $torrent_id);
        if ($model) {
            return $model;
        }

        $model = new PtTorrent();
        $model->sid = $sid;
        $model->torrent_id = $torrent_id;
        $model->group_id = $input->group_id ?? 0;
        $rs = $model->save();
        if (true !== $rs) {
            throw new BusinessException('创建种子失败');
        }

        return self::update($model, $input);
    }

    /**
     * 更新
     * @param PtTorrent $model
     * @param TorrentData $input
     * @return PtTorrent
     * @throws BusinessException|Throwable
     */
    public static function update(PtTorrent $model, TorrentData $input): PtTorrent
    {
        return Util::db()->transaction(function () use ($model, $input) {
            try {
                $payload = new Payload($model, $input);
                $pipeline = new Pipeline();
                $pipeline->send($payload)
                    ->through([
                        [CategoryPipeline::class, 'process'],
                        [MediumPipeline::class, 'process'],
                        [CodecPipeline::class, 'process'],
                        [AudioCodecPipeline::class, 'process'],
                        [StandardPipeline::class, 'process'],
                        [TeamPipeline::class, 'process'],
                    ])
                    ->thenReturn();
                $model->save();
            } catch (Throwable $throwable) {
                Log::error(__METHOD__ . '创建种子出错：' . $throwable->getMessage());
                throw new BusinessException($throwable->getMessage(), $throwable->getCode());
            }
        });
    }
}