<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaSubjectAttent;

/**
 * 模型观察者：追剧表 meta_subject_attent
 * @usage MetaSubjectAttent::observe(MetaSubjectAttentObserver::class);
 */
class MetaSubjectAttentObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaSubjectAttent $model
     * @return void
     */
    public function creating(MetaSubjectAttent $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaSubjectAttent $model
     * @return void
     */
    public function created(MetaSubjectAttent $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaSubjectAttent $model
     * @return void
     */
    public function updating(MetaSubjectAttent $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaSubjectAttent $model
     * @return void
     */
    public function updated(MetaSubjectAttent $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaSubjectAttent $model
     * @return void
     */
    public function saving(MetaSubjectAttent $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaSubjectAttent $model
     * @return void
     */
    public function saved(MetaSubjectAttent $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaSubjectAttent $model
     * @return void
     */
    public function deleting(MetaSubjectAttent $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaSubjectAttent $model
     * @return void
     */
    public function deleted(MetaSubjectAttent $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaSubjectAttent $model
     * @return void
     */
    public function restoring(MetaSubjectAttent $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaSubjectAttent $model
     * @return void
     */
    public function restored(MetaSubjectAttent $model): void
    {
    }
}
