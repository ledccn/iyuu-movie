<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaContent;

/**
 * 模型观察者：剧情简介 meta_content
 * @usage MetaContent::observe(MetaContentObserver::class);
 */
class MetaContentObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaContent $model
     * @return void
     */
    public function creating(MetaContent $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaContent $model
     * @return void
     */
    public function created(MetaContent $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaContent $model
     * @return void
     */
    public function updating(MetaContent $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaContent $model
     * @return void
     */
    public function updated(MetaContent $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaContent $model
     * @return void
     */
    public function saving(MetaContent $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaContent $model
     * @return void
     */
    public function saved(MetaContent $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaContent $model
     * @return void
     */
    public function deleting(MetaContent $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaContent $model
     * @return void
     */
    public function deleted(MetaContent $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaContent $model
     * @return void
     */
    public function restoring(MetaContent $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaContent $model
     * @return void
     */
    public function restored(MetaContent $model): void
    {
    }
}
