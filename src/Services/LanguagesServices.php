<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaLanguage;
use Iyuu\Movie\Model\MetaLanguagesRelation;
use Iyuu\Movie\Model\MetaSubject;
use support\Db;

/**
 * 服务：影视语言
 */
class LanguagesServices
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
                // 影视语言表
                $model = MetaLanguage::updateOrCreate(['value' => $value]);
                $pk = $model->lang_id;

                // 影视语言关系表
                MetaLanguagesRelation::updateOrCreate(['lang_id' => $pk, 'subject_id' => $subject_id]);
                $pkArray[] = $pk;
            }

            return $pkArray;
        });
    }
}
