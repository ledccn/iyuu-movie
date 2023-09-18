<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaTag;

/**
 * 模型观察者：标签 meta_tags
 * @usage MetaTag::observe(MetaTagObserver::class);
 */
class MetaTagObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaTag $model
     * @return void
     */
    public function creating(MetaTag $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaTag $model
     * @return void
     */
    public function created(MetaTag $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaTag $model
     * @return void
     */
    public function updating(MetaTag $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaTag $model
     * @return void
     */
    public function updated(MetaTag $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaTag $model
     * @return void
     */
    public function saving(MetaTag $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaTag $model
     * @return void
     */
    public function saved(MetaTag $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaTag $model
     * @return void
     */
    public function deleting(MetaTag $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaTag $model
     * @return void
     */
    public function deleted(MetaTag $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaTag $model
     * @return void
     */
    public function restoring(MetaTag $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaTag $model
     * @return void
     */
    public function restored(MetaTag $model): void
    {
    }
}
