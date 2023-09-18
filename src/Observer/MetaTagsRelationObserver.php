<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaTagsRelation;

/**
 * 模型观察者：标签关系表 meta_tags_relation
 * @usage MetaTagsRelation::observe(MetaTagsRelationObserver::class);
 */
class MetaTagsRelationObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaTagsRelation $model
     * @return void
     */
    public function creating(MetaTagsRelation $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaTagsRelation $model
     * @return void
     */
    public function created(MetaTagsRelation $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaTagsRelation $model
     * @return void
     */
    public function updating(MetaTagsRelation $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaTagsRelation $model
     * @return void
     */
    public function updated(MetaTagsRelation $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaTagsRelation $model
     * @return void
     */
    public function saving(MetaTagsRelation $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaTagsRelation $model
     * @return void
     */
    public function saved(MetaTagsRelation $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaTagsRelation $model
     * @return void
     */
    public function deleting(MetaTagsRelation $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaTagsRelation $model
     * @return void
     */
    public function deleted(MetaTagsRelation $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaTagsRelation $model
     * @return void
     */
    public function restoring(MetaTagsRelation $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaTagsRelation $model
     * @return void
     */
    public function restored(MetaTagsRelation $model): void
    {
    }
}
