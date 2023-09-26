<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaSubject;
use Iyuu\Movie\Model\MetaTitle;
use Iyuu\Movie\Model\MetaTitleRelation;
use support\Db;

/**
 * 服务：影视标题
 */
class TitleServices
{
    /**
     * 保存影视标题
     * - 关联表较多，应在数据库事务内操作
     * @param MetaSubject $metaSubject
     * @param string|array $data
     * @return array
     */
    public static function save(MetaSubject $metaSubject, string|array $data): array
    {
        if (empty($data)) {
            return [];
        }
        if (is_string($data)) {
            $data = [$data];
        }

        return Db::transaction(function () use ($metaSubject, $data) {
            $pkArray = [];
            $subject_id = $metaSubject->id;
            foreach ($data as $v) {
                $value = trim($v);
                if (empty($value)) {
                    continue;
                }

                // 影视标题表
                $sha1 = sha1($value);
                $model = MetaTitle::updateOrCreate(['sha1' => $sha1], ['title' => $value]);
                $title_id = $model->title_id;

                // 影视标题关系表
                MetaTitleRelation::updateOrCreate(['title_id' => $title_id, 'subject_id' => $subject_id]);
                $pkArray[] = $title_id;
            }

            return $pkArray;
        });
    }
}