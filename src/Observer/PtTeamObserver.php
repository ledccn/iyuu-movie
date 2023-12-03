<?php

namespace Iyuu\Movie\Observer;

use Iyuu\Movie\Model\PtTeam;

/**
 * 模型观察者：pt_team
 * @usage PtTeam::observe(PtTeamObserver::class);
 */
class PtTeamObserver
{
   /**
     * 监听数据即将创建的事件。
     *
     * @param PtTeam $model
     * @return void
     */
    public function creating(PtTeam $model): void
    {
    }

    /**
     * 监听数据创建后的事件。
     *
     * @param PtTeam $model
     * @return void
     */
    public function created(PtTeam $model): void
    {
    }

    /**
     * 监听数据即将更新的事件。
     *
     * @param PtTeam $model
     * @return void
     */
    public function updating(PtTeam $model): void
    {
    }

    /**
     * 监听数据更新后的事件。
     *
     * @param PtTeam $model
     * @return void
     */
    public function updated(PtTeam $model): void
    {
    }

    /**
     * 监听数据即将保存的事件。
     *
     * @param PtTeam $model
     * @return void
     */
    public function saving(PtTeam $model): void
    {
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param PtTeam $model
     * @return void
     */
    public function saved(PtTeam $model): void
    {
    }

    /**
     * 监听数据即将删除的事件。
     *
     * @param PtTeam $model
     * @return void
     */
    public function deleting(PtTeam $model): void
    {
    }

    /**
     * 监听数据删除后的事件。
     *
     * @param PtTeam $model
     * @return void
     */
    public function deleted(PtTeam $model): void
    {
    }

    /**
     * 监听数据即将从软删除状态恢复的事件。
     *
     * @param PtTeam $model
     * @return void
     */
    public function restoring(PtTeam $model): void
    {
    }

    /**
     * 监听数据从软删除状态恢复后的事件。
     *
     * @param PtTeam $model
     * @return void
     */
    public function restored(PtTeam $model): void
    {
    } 
}
