<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\PtStandard;

/**
 * 模型观察者：pt_standard
 * @usage PtStandard::observe(PtStandardObserver::class);
 */
class PtStandardObserver
{
   /**
     * 监听数据即将创建的事件。
     *
     * @param PtStandard $model
     * @return void
     */
    public function creating(PtStandard $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param PtStandard $model
     * @return void
     */
    public function created(PtStandard $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param PtStandard $model
     * @return void
     */
    public function updating(PtStandard $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param PtStandard $model
     * @return void
     */
    public function updated(PtStandard $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param PtStandard $model
     * @return void
     */
    public function saving(PtStandard $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param PtStandard $model
     * @return void
     */
    public function saved(PtStandard $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param PtStandard $model
     * @return void
     */
    public function deleting(PtStandard $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param PtStandard $model
     * @return void
     */
    public function deleted(PtStandard $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param PtStandard $model
     * @return void
     */
    public function restoring(PtStandard $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param PtStandard $model
     * @return void
     */
    public function restored(PtStandard $model): void
    {
    } 
}
