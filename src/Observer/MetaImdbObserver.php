<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaImdb;

/**
 * 模型观察者：IMDB条目 meta_imdb
 * @usage MetaImdb::observe(MetaImdbObserver::class);
 */
class MetaImdbObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaImdb $model
     * @return void
     */
    public function creating(MetaImdb $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaImdb $model
     * @return void
     */
    public function created(MetaImdb $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaImdb $model
     * @return void
     */
    public function updating(MetaImdb $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaImdb $model
     * @return void
     */
    public function updated(MetaImdb $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaImdb $model
     * @return void
     */
    public function saving(MetaImdb $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaImdb $model
     * @return void
     */
    public function saved(MetaImdb $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaImdb $model
     * @return void
     */
    public function deleting(MetaImdb $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaImdb $model
     * @return void
     */
    public function deleted(MetaImdb $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaImdb $model
     * @return void
     */
    public function restoring(MetaImdb $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaImdb $model
     * @return void
     */
    public function restored(MetaImdb $model): void
    {
    }
}
