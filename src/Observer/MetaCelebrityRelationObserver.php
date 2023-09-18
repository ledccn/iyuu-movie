<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaCelebrityRelation;

/**
 * 模型观察者：影视条目与影人关系 meta_subject_celebrity_relation
 * @usage MetaSubjectCelebrityRelation::observe(MetaSubjectCelebrityRelationObserver::class);
 */
class MetaCelebrityRelationObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaCelebrityRelation $model
     * @return void
     */
    public function creating(MetaCelebrityRelation $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaCelebrityRelation $model
     * @return void
     */
    public function created(MetaCelebrityRelation $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaCelebrityRelation $model
     * @return void
     */
    public function updating(MetaCelebrityRelation $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaCelebrityRelation $model
     * @return void
     */
    public function updated(MetaCelebrityRelation $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaCelebrityRelation $model
     * @return void
     */
    public function saving(MetaCelebrityRelation $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaCelebrityRelation $model
     * @return void
     */
    public function saved(MetaCelebrityRelation $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaCelebrityRelation $model
     * @return void
     */
    public function deleting(MetaCelebrityRelation $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaCelebrityRelation $model
     * @return void
     */
    public function deleted(MetaCelebrityRelation $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaCelebrityRelation $model
     * @return void
     */
    public function restoring(MetaCelebrityRelation $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaCelebrityRelation $model
     * @return void
     */
    public function restored(MetaCelebrityRelation $model): void
    {
    }
}
