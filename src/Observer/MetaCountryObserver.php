<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaCountry;

/**
 * 模型观察者：国家或地区 meta_countries
 * @usage MetaCountry::observe(MetaCountryObserver::class);
 */
class MetaCountryObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaCountry $model
     * @return void
     */
    public function creating(MetaCountry $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaCountry $model
     * @return void
     */
    public function created(MetaCountry $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaCountry $model
     * @return void
     */
    public function updating(MetaCountry $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaCountry $model
     * @return void
     */
    public function updated(MetaCountry $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaCountry $model
     * @return void
     */
    public function saving(MetaCountry $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaCountry $model
     * @return void
     */
    public function saved(MetaCountry $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaCountry $model
     * @return void
     */
    public function deleting(MetaCountry $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaCountry $model
     * @return void
     */
    public function deleted(MetaCountry $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaCountry $model
     * @return void
     */
    public function restoring(MetaCountry $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaCountry $model
     * @return void
     */
    public function restored(MetaCountry $model): void
    {
    }
}
