<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaCelebrity;

/**
 * 模型观察者：名人表 meta_celebrity
 * @usage MetaCelebrity::observe(MetaCelebrityObserver::class);
 */
class MetaCelebrityObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaCelebrity $model
     * @return void
     */
    public function creating(MetaCelebrity $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaCelebrity $model
     * @return void
     */
    public function created(MetaCelebrity $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaCelebrity $model
     * @return void
     */
    public function updating(MetaCelebrity $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaCelebrity $model
     * @return void
     */
    public function updated(MetaCelebrity $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaCelebrity $model
     * @return void
     */
    public function saving(MetaCelebrity $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaCelebrity $model
     * @return void
     */
    public function saved(MetaCelebrity $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaCelebrity $model
     * @return void
     */
    public function deleting(MetaCelebrity $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaCelebrity $model
     * @return void
     */
    public function deleted(MetaCelebrity $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaCelebrity $model
     * @return void
     */
    public function restoring(MetaCelebrity $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaCelebrity $model
     * @return void
     */
    public function restored(MetaCelebrity $model): void
    {
    }
}
