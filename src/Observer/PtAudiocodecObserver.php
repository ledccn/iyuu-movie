<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\PtAudiocodec;

/**
 * 模型观察者：pt_audiocodec
 * @usage PtAudiocodec::observe(PtAudiocodecObserver::class);
 */
class PtAudiocodecObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param PtAudiocodec $model
     * @return void
     */
    public function creating(PtAudiocodec $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param PtAudiocodec $model
     * @return void
     */
    public function created(PtAudiocodec $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param PtAudiocodec $model
     * @return void
     */
    public function updating(PtAudiocodec $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param PtAudiocodec $model
     * @return void
     */
    public function updated(PtAudiocodec $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param PtAudiocodec $model
     * @return void
     */
    public function saving(PtAudiocodec $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param PtAudiocodec $model
     * @return void
     */
    public function saved(PtAudiocodec $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param PtAudiocodec $model
     * @return void
     */
    public function deleting(PtAudiocodec $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param PtAudiocodec $model
     * @return void
     */
    public function deleted(PtAudiocodec $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param PtAudiocodec $model
     * @return void
     */
    public function restoring(PtAudiocodec $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param PtAudiocodec $model
     * @return void
     */
    public function restored(PtAudiocodec $model): void
    {
    }
}
