<?php

namespace Iyuu\Movie\Observer;

/**
 * 模型观察者：pt_subject_relation
 * @usage PtSubjectRelation::observe(PtSubjectRelationObserver::class);
 */
class PtSubjectRelationObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param PtSubjectRelation $model
     * @return void
     */
    public function creating(PtSubjectRelation $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param PtSubjectRelation $model
     * @return void
     */
    public function created(PtSubjectRelation $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param PtSubjectRelation $model
     * @return void
     */
    public function updating(PtSubjectRelation $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param PtSubjectRelation $model
     * @return void
     */
    public function updated(PtSubjectRelation $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param PtSubjectRelation $model
     * @return void
     */
    public function saving(PtSubjectRelation $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param PtSubjectRelation $model
     * @return void
     */
    public function saved(PtSubjectRelation $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param PtSubjectRelation $model
     * @return void
     */
    public function deleting(PtSubjectRelation $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param PtSubjectRelation $model
     * @return void
     */
    public function deleted(PtSubjectRelation $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param PtSubjectRelation $model
     * @return void
     */
    public function restoring(PtSubjectRelation $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param PtSubjectRelation $model
     * @return void
     */
    public function restored(PtSubjectRelation $model): void
    {
    }
}
