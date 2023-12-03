<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\PtCategory;

/**
 * 模型观察者：pt_category
 * @usage PtCategory::observe(PtCategoryObserver::class);
 */
class PtCategoryObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param PtCategory $model
     * @return void
     */
    public function creating(PtCategory $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param PtCategory $model
     * @return void
     */
    public function created(PtCategory $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param PtCategory $model
     * @return void
     */
    public function updating(PtCategory $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param PtCategory $model
     * @return void
     */
    public function updated(PtCategory $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param PtCategory $model
     * @return void
     */
    public function saving(PtCategory $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param PtCategory $model
     * @return void
     */
    public function saved(PtCategory $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param PtCategory $model
     * @return void
     */
    public function deleting(PtCategory $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param PtCategory $model
     * @return void
     */
    public function deleted(PtCategory $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param PtCategory $model
     * @return void
     */
    public function restoring(PtCategory $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param PtCategory $model
     * @return void
     */
    public function restored(PtCategory $model): void
    {
    }
}
