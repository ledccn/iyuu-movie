<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaSubject;

/**
 * 模型观察者：影视条目 meta_subject
 * @usage MetaSubject::observe(MetaSubjectObserver::class);
 */
class MetaSubjectObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaSubject $model
     * @return void
     */
    public function creating(MetaSubject $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaSubject $model
     * @return void
     */
    public function created(MetaSubject $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaSubject $model
     * @return void
     */
    public function updating(MetaSubject $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaSubject $model
     * @return void
     */
    public function updated(MetaSubject $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaSubject $model
     * @return void
     */
    public function saving(MetaSubject $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaSubject $model
     * @return void
     */
    public function saved(MetaSubject $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaSubject $model
     * @return void
     */
    public function deleting(MetaSubject $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaSubject $model
     * @return void
     */
    public function deleted(MetaSubject $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaSubject $model
     * @return void
     */
    public function restoring(MetaSubject $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaSubject $model
     * @return void
     */
    public function restored(MetaSubject $model): void
    {
    }
}
