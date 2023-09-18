<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaTitleRelation;

/**
 * 模型观察者：影视标题关系表 meta_title_relation
 * @usage MetaTitleRelation::observe(MetaTitleRelationObserver::class);
 */
class MetaTitleRelationObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaTitleRelation $model
     * @return void
     */
    public function creating(MetaTitleRelation $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaTitleRelation $model
     * @return void
     */
    public function created(MetaTitleRelation $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaTitleRelation $model
     * @return void
     */
    public function updating(MetaTitleRelation $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaTitleRelation $model
     * @return void
     */
    public function updated(MetaTitleRelation $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaTitleRelation $model
     * @return void
     */
    public function saving(MetaTitleRelation $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaTitleRelation $model
     * @return void
     */
    public function saved(MetaTitleRelation $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaTitleRelation $model
     * @return void
     */
    public function deleting(MetaTitleRelation $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaTitleRelation $model
     * @return void
     */
    public function deleted(MetaTitleRelation $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaTitleRelation $model
     * @return void
     */
    public function restoring(MetaTitleRelation $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaTitleRelation $model
     * @return void
     */
    public function restored(MetaTitleRelation $model): void
    {
    }
}
