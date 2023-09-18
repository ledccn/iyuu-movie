<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaNameRelation;

/**
 * 模型观察者：演员名字关系表 meta_name_relation
 * @usage MetaNameRelation::observe(MetaNameRelationObserver::class);
 */
class MetaNameRelationObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaNameRelation $model
     * @return void
     */
    public function creating(MetaNameRelation $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaNameRelation $model
     * @return void
     */
    public function created(MetaNameRelation $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaNameRelation $model
     * @return void
     */
    public function updating(MetaNameRelation $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaNameRelation $model
     * @return void
     */
    public function updated(MetaNameRelation $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaNameRelation $model
     * @return void
     */
    public function saving(MetaNameRelation $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaNameRelation $model
     * @return void
     */
    public function saved(MetaNameRelation $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaNameRelation $model
     * @return void
     */
    public function deleting(MetaNameRelation $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaNameRelation $model
     * @return void
     */
    public function deleted(MetaNameRelation $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaNameRelation $model
     * @return void
     */
    public function restoring(MetaNameRelation $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaNameRelation $model
     * @return void
     */
    public function restored(MetaNameRelation $model): void
    {
    }
}
