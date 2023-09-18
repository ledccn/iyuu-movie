<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaGenre;

/**
 * 模型观察者：流派 meta_genres
 * @usage MetaGenre::observe(MetaGenreObserver::class);
 */
class MetaGenreObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaGenre $model
     * @return void
     */
    public function creating(MetaGenre $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaGenre $model
     * @return void
     */
    public function created(MetaGenre $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaGenre $model
     * @return void
     */
    public function updating(MetaGenre $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaGenre $model
     * @return void
     */
    public function updated(MetaGenre $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaGenre $model
     * @return void
     */
    public function saving(MetaGenre $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaGenre $model
     * @return void
     */
    public function saved(MetaGenre $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaGenre $model
     * @return void
     */
    public function deleting(MetaGenre $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaGenre $model
     * @return void
     */
    public function deleted(MetaGenre $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaGenre $model
     * @return void
     */
    public function restoring(MetaGenre $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaGenre $model
     * @return void
     */
    public function restored(MetaGenre $model): void
    {
    }
}
