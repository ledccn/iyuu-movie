<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\PtMedium;

/**
 * 模型观察者：pt_medium
 * @usage PtMedium::observe(PtMediumObserver::class);
 */
class PtMediumObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param PtMedium $model
     * @return void
     */
    public function creating(PtMedium $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param PtMedium $model
     * @return void
     */
    public function created(PtMedium $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param PtMedium $model
     * @return void
     */
    public function updating(PtMedium $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param PtMedium $model
     * @return void
     */
    public function updated(PtMedium $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param PtMedium $model
     * @return void
     */
    public function saving(PtMedium $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param PtMedium $model
     * @return void
     */
    public function saved(PtMedium $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param PtMedium $model
     * @return void
     */
    public function deleting(PtMedium $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param PtMedium $model
     * @return void
     */
    public function deleted(PtMedium $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param PtMedium $model
     * @return void
     */
    public function restoring(PtMedium $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param PtMedium $model
     * @return void
     */
    public function restored(PtMedium $model): void
    {
    }
}
