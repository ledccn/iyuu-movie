<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaGenre;
use Iyuu\Movie\Model\MetaGenresRelation;
use Iyuu\Movie\Model\MetaSubject;
use plugin\admin\app\common\Util;

/**
 * 服务：影视流派
 */
class GenresServices
{
    /**
     * 保存
     * - 关联表较多，应在数据库事务内操作
     * @param MetaSubject $metaSubject
     * @param array $data
     * @return array
     * @throws \Throwable
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

                // 影视流派表
                $model = MetaGenre::updateOrCreate(['value' => $value]);
                $pk = $model->genres_id;

                // 影视流派关系表
                MetaGenresRelation::updateOrCreate(['genres_id' => $pk, 'subject_id' => $subject_id]);
                $pkArray[] = $pk;
            }

            return $pkArray;
        });
    }
}