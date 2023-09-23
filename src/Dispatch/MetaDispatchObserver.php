<?php

namespace Iyuu\Movie\Dispatch;

/**
 * 模型观察者：meta_dispatch
 * @usage MetaDispatch::observe(MetaDispatchObserver::class);
 */
class MetaDispatchObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaDispatch $model
     * @return void
     */
    public function creating(MetaDispatch $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaDispatch $model
     * @return void
     */
    public function created(MetaDispatch $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaDispatch $model
     * @return void
     */
    public function updating(MetaDispatch $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaDispatch $model
     * @return void
     */
    public function updated(MetaDispatch $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaDispatch $model
     * @return void
     */
    public function saving(MetaDispatch $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaDispatch $model
     * @return void
     */
    public function saved(MetaDispatch $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaDispatch $model
     * @return void
     */
    public function deleting(MetaDispatch $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaDispatch $model
     * @return void
     */
    public function deleted(MetaDispatch $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaDispatch $model
     * @return void
     */
    public function restoring(MetaDispatch $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaDispatch $model
     * @return void
     */
    public function restored(MetaDispatch $model): void
    {
    }
}
