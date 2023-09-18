<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaName;

/**
 * 模型观察者：演员名字 meta_name
 * @usage MetaName::observe(MetaNameObserver::class);
 */
class MetaNameObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaName $model
     * @return void
     */
    public function creating(MetaName $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaName $model
     * @return void
     */
    public function created(MetaName $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaName $model
     * @return void
     */
    public function updating(MetaName $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaName $model
     * @return void
     */
    public function updated(MetaName $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaName $model
     * @return void
     */
    public function saving(MetaName $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaName $model
     * @return void
     */
    public function saved(MetaName $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaName $model
     * @return void
     */
    public function deleting(MetaName $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaName $model
     * @return void
     */
    public function deleted(MetaName $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaName $model
     * @return void
     */
    public function restoring(MetaName $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaName $model
     * @return void
     */
    public function restored(MetaName $model): void
    {
    }
}
