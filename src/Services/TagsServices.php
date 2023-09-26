<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaSubject;
use Iyuu\Movie\Model\MetaTag;
use Iyuu\Movie\Model\MetaTagsRelation;
use support\Db;

/**
 * 服务：影视标签
 */
class TagsServices
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
            foreach ($data as $v) {
                $value = trim($v);
                if (empty($value)) {
                    continue;
                }
                // 影视标签表
                $model = MetaTag::updateOrCreate(['value' => $value]);
                $pk = $model->tags_id;

                // 影视标签关系表
                MetaTagsRelation::updateOrCreate(['tags_id' => $pk, 'subject_id' => $subject_id]);
                $pkArray[] = $pk;
            }

            return $pkArray;
        });
    }
}