<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\PtSubtitle;

/**
 * 模型观察者：pt_subtitle
 * @usage PtSubtitle::observe(PtSubtitleObserver::class);
 */
class PtSubtitleObserver
{
   /**
     * 监听数据即将创建的事件。
     *
     * @param PtSubtitle $model
     * @return void
     */
    public function creating(PtSubtitle $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param PtSubtitle $model
     * @return void
     */
    public function created(PtSubtitle $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param PtSubtitle $model
     * @return void
     */
    public function updating(PtSubtitle $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param PtSubtitle $model
     * @return void
     */
    public function updated(PtSubtitle $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param PtSubtitle $model
     * @return void
     */
    public function saving(PtSubtitle $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param PtSubtitle $model
     * @return void
     */
    public function saved(PtSubtitle $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param PtSubtitle $model
     * @return void
     */
    public function deleting(PtSubtitle $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param PtSubtitle $model
     * @return void
     */
    public function deleted(PtSubtitle $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param PtSubtitle $model
     * @return void
     */
    public function restoring(PtSubtitle $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param PtSubtitle $model
     * @return void
     */
    public function restored(PtSubtitle $model): void
    {
    } 
}
