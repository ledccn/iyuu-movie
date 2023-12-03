<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\PtTitle;

/**
 * 模型观察者：pt_title
 * @usage PtTitle::observe(PtTitleObserver::class);
 */
class PtTitleObserver
{
   /**
     * 监听数据即将创建的事件。
     *
     * @param PtTitle $model
     * @return void
     */
    public function creating(PtTitle $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param PtTitle $model
     * @return void
     */
    public function created(PtTitle $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param PtTitle $model
     * @return void
     */
    public function updating(PtTitle $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param PtTitle $model
     * @return void
     */
    public function updated(PtTitle $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param PtTitle $model
     * @return void
     */
    public function saving(PtTitle $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param PtTitle $model
     * @return void
     */
    public function saved(PtTitle $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param PtTitle $model
     * @return void
     */
    public function deleting(PtTitle $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param PtTitle $model
     * @return void
     */
    public function deleted(PtTitle $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param PtTitle $model
     * @return void
     */
    public function restoring(PtTitle $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param PtTitle $model
     * @return void
     */
    public function restored(PtTitle $model): void
    {
    } 
}
