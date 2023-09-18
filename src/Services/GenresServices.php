<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaGenre;
use Iyuu\Movie\Model\MetaGenresRelation;
use Iyuu\Movie\Model\MetaSubject;
use support\Db;

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