<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaTitle;

/**
 * 模型观察者：影视标题 meta_title
 * @usage MetaTitle::observe(MetaTitleObserver::class);
 */
class MetaTitleObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaTitle $model
     * @return void
     */
    public function creating(MetaTitle $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaTitle $model
     * @return void
     */
    public function created(MetaTitle $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaTitle $model
     * @return void
     */
    public function updating(MetaTitle $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaTitle $model
     * @return void
     */
    public function updated(MetaTitle $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaTitle $model
     * @return void
     */
    public function saving(MetaTitle $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaTitle $model
     * @return void
     */
    public function saved(MetaTitle $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaTitle $model
     * @return void
     */
    public function deleting(MetaTitle $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaTitle $model
     * @return void
     */
    public function deleted(MetaTitle $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaTitle $model
     * @return void
     */
    public function restoring(MetaTitle $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaTitle $model
     * @return void
     */
    public function restored(MetaTitle $model): void
    {
    }
}
