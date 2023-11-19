<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\PtTorrent;

/**
 * 模型观察者：pt_torrents
 * @usage PtTorrent::observe(PtTorrentObserver::class);
 */
class PtTorrentObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param PtTorrent $model
     * @return void
     */
    public function creating(PtTorrent $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param PtTorrent $model
     * @return void
     */
    public function created(PtTorrent $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param PtTorrent $model
     * @return void
     */
    public function updating(PtTorrent $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param PtTorrent $model
     * @return void
     */
    public function updated(PtTorrent $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param PtTorrent $model
     * @return void
     */
    public function saving(PtTorrent $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param PtTorrent $model
     * @return void
     */
    public function saved(PtTorrent $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param PtTorrent $model
     * @return void
     */
    public function deleting(PtTorrent $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param PtTorrent $model
     * @return void
     */
    public function deleted(PtTorrent $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param PtTorrent $model
     * @return void
     */
    public function restoring(PtTorrent $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param PtTorrent $model
     * @return void
     */
    public function restored(PtTorrent $model): void
    {
    }
}
