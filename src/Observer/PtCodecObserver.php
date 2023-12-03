<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\PtCodec;

/**
 * 模型观察者：pt_codec
 * @usage PtCodec::observe(PtCodecObserver::class);
 */
class PtCodecObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param PtCodec $model
     * @return void
     */
    public function creating(PtCodec $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param PtCodec $model
     * @return void
     */
    public function created(PtCodec $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param PtCodec $model
     * @return void
     */
    public function updating(PtCodec $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param PtCodec $model
     * @return void
     */
    public function updated(PtCodec $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param PtCodec $model
     * @return void
     */
    public function saving(PtCodec $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param PtCodec $model
     * @return void
     */
    public function saved(PtCodec $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param PtCodec $model
     * @return void
     */
    public function deleting(PtCodec $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param PtCodec $model
     * @return void
     */
    public function deleted(PtCodec $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param PtCodec $model
     * @return void
     */
    public function restoring(PtCodec $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param PtCodec $model
     * @return void
     */
    public function restored(PtCodec $model): void
    {
    }
}
