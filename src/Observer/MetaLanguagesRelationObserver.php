<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaLanguagesRelation;

/**
 * 语言关系表
 * 模型观察者：meta_languages_relation
 * @usage MetaLanguagesRelation::observe(MetaLanguagesRelationObserver::class);
 */
class MetaLanguagesRelationObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaLanguagesRelation $model
     * @return void
     */
    public function creating(MetaLanguagesRelation $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaLanguagesRelation $model
     * @return void
     */
    public function created(MetaLanguagesRelation $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaLanguagesRelation $model
     * @return void
     */
    public function updating(MetaLanguagesRelation $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaLanguagesRelation $model
     * @return void
     */
    public function updated(MetaLanguagesRelation $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaLanguagesRelation $model
     * @return void
     */
    public function saving(MetaLanguagesRelation $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaLanguagesRelation $model
     * @return void
     */
    public function saved(MetaLanguagesRelation $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaLanguagesRelation $model
     * @return void
     */
    public function deleting(MetaLanguagesRelation $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaLanguagesRelation $model
     * @return void
     */
    public function deleted(MetaLanguagesRelation $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaLanguagesRelation $model
     * @return void
     */
    public function restoring(MetaLanguagesRelation $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaLanguagesRelation $model
     * @return void
     */
    public function restored(MetaLanguagesRelation $model): void
    {
    }
}
