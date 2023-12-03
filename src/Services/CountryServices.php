<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaCountriesRelation;
use Iyuu\Movie\Model\MetaCountry;
use Iyuu\Movie\Model\MetaSubject;
use plugin\admin\app\common\Util;
use support\Db;
use Throwable;

/**
 * 服务：影视国家地区
 */
class CountryServices
{
    /**
     * 保存
     * - 关联表较多，应在数据库事务内操作
     * @param MetaSubject $metaSubject
     * @param array $data
     * @return array
     * @throws Throwable
     */
    public static function save(MetaSubject $metaSubject, array $data): array
    {
        if (empty($data)) {
            return [];
        }

        return Util::db()->transaction(function () use ($metaSubject, $data) {
            $pkArray = [];
            $subject_id = $metaSubject->id;
            foreach ($data as $v) {
                $value = trim($v);
                if (empty($value)) {
                    continue;
                }

                // 影视国家地区表
                $model = MetaCountry::updateOrCreate(['value' => $value]);
                $pk = $model->countries_id;

                // 影视国家地区关系表
                MetaCountriesRelation::updateOrCreate(['countries_id' => $pk, 'subject_id' => $subject_id]);
                $pkArray[] = $pk;
            }

            return $pkArray;
        });
    }
}