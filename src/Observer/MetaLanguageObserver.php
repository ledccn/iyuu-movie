<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\MetaLanguage;

/**
 * 模型观察者：语言 meta_languages
 * @usage MetaLanguage::observe(MetaLanguageObserver::class);
 */
class MetaLanguageObserver
{
    /**
     * 监听数据即将创建的事件。
     *
     * @param MetaLanguage $model
     * @return void
     */
    public function creating(MetaLanguage $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param MetaLanguage $model
     * @return void
     */
    public function created(MetaLanguage $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param MetaLanguage $model
     * @return void
     */
    public function updating(MetaLanguage $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param MetaLanguage $model
     * @return void
     */
    public function updated(MetaLanguage $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param MetaLanguage $model
     * @return void
     */
    public function saving(MetaLanguage $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param MetaLanguage $model
     * @return void
     */
    public function saved(MetaLanguage $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param MetaLanguage $model
     * @return void
     */
    public function deleting(MetaLanguage $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param MetaLanguage $model
     * @return void
     */
    public function deleted(MetaLanguage $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param MetaLanguage $model
     * @return void
     */
    public function restoring(MetaLanguage $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param MetaLanguage $model
     * @return void
     */
    public function restored(MetaLanguage $model): void
    {
    }
}
