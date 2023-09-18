<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaCountriesRelation;
use Iyuu\Movie\Model\MetaCountry;
use Iyuu\Movie\Model\MetaSubject;
use support\Db;

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
     */
    public static function save(MetaSubject $metaSubject, array $data): array
    {
        if (empty($data)) {
            return [];
        }

        return Db::transaction(function () use ($metaSubject, $data) {
            $pkArray = [];
            $subject_id = $metaSubject->id;
            foreach ($data as $value) {
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