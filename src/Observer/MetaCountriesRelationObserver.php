<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaCountriesRelation;

/**
 * 模型观察者：国家关系表 meta_countries_relation
 * @usage MetaCountriesRelation::observe(MetaCountriesRelationObserver::class);
 */
class MetaCountriesRelationObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaCountriesRelation $model
     * @return void
     */
    public function creating(MetaCountriesRelation $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaCountriesRelation $model
     * @return void
     */
    public function created(MetaCountriesRelation $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaCountriesRelation $model
     * @return void
     */
    public function updating(MetaCountriesRelation $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaCountriesRelation $model
     * @return void
     */
    public function updated(MetaCountriesRelation $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaCountriesRelation $model
     * @return void
     */
    public function saving(MetaCountriesRelation $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaCountriesRelation $model
     * @return void
     */
    public function saved(MetaCountriesRelation $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaCountriesRelation $model
     * @return void
     */
    public function deleting(MetaCountriesRelation $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaCountriesRelation $model
     * @return void
     */
    public function deleted(MetaCountriesRelation $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaCountriesRelation $model
     * @return void
     */
    public function restoring(MetaCountriesRelation $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaCountriesRelation $model
     * @return void
     */
    public function restored(MetaCountriesRelation $model): void
    {
    }
}
