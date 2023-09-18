<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaImdbNm;

/**
 * IMDB名人
 * 模型观察者：meta_imdb_nm
 * @usage MetaImdbNm::observe(MetaImdbNmObserver::class);
 */
class MetaImdbNmObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaImdbNm $model
     * @return void
     */
    public function creating(MetaImdbNm $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaImdbNm $model
     * @return void
     */
    public function created(MetaImdbNm $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaImdbNm $model
     * @return void
     */
    public function updating(MetaImdbNm $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaImdbNm $model
     * @return void
     */
    public function updated(MetaImdbNm $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaImdbNm $model
     * @return void
     */
    public function saving(MetaImdbNm $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaImdbNm $model
     * @return void
     */
    public function saved(MetaImdbNm $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaImdbNm $model
     * @return void
     */
    public function deleting(MetaImdbNm $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaImdbNm $model
     * @return void
     */
    public function deleted(MetaImdbNm $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaImdbNm $model
     * @return void
     */
    public function restoring(MetaImdbNm $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaImdbNm $model
     * @return void
     */
    public function restored(MetaImdbNm $model): void
    {
    }
}
