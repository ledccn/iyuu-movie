<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaCelebrity;
use Iyuu\Movie\Model\MetaCelebrityRelation;
use Iyuu\Movie\Model\MetaNameRelation;
use Iyuu\Movie\Model\MetaSubject;
use support\Db;

/**
 * 服务：名人
 */
class CelebrityServices
{
    /**
     * 更新或创建 影人
     * - 关联表较多，应在数据库事务内操作
     * @param MetaSubject $metaSubject
     * @param array $data
     * @return array
     */
    public static function updateOrCreateByDouban(MetaSubject $metaSubject, array $data): array
    {
        if (empty($data)) {
            return [];
        }

        return Db::transaction(function () use ($metaSubject, $data) {
            $pkArray = [];
            $subject_id = $metaSubject->id;
            foreach ($data as $celebrity) {
                $sites_id = $metaSubject->sites_id;
                if (empty($celebrity['id'])) {
                    continue;
                }
                $name_sn = $celebrity['id'];

                $model = MetaCelebrity::getModelByUnique($metaSubject->sites_id, $name_sn);
                if (!$model) {
                    $model = new MetaCelebrity();
                    $model->sites_id = $sites_id;
                    $model->name_sn = $name_sn;
                    $model->alt = $celebrity['alt'] ?? '';
                    $model->avatars = $celebrity['avatar'] ?? '';
                    if (!empty($celebrity['works'])) {
                        $model->works = json_encode($celebrity['works'], JSON_UNESCAPED_UNICODE);
                    }

                    // 影人名字表
                    $name_id = NameServices::updateOrCreate(trim($celebrity['name'] ?? ''));
                    $model->name = $name_id;
                    $model->state = 1;
                    $model->save();
                    $celebrity_id = $model->celebrity_id;

                    // 影人名字关系表
                    MetaNameRelation::updateOrCreate(['name_id' => $name_id, 'celebrity_id' => $celebrity_id]);
                } else {
                    $celebrity_id = $model->celebrity_id;
                }

                // 条目影人关系表
                MetaCelebrityRelation::updateOrCreate(['subject_id' => $subject_id, 'celebrity_id' => $celebrity_id]);
                $pkArray[] = $celebrity_id;
            }

            return $pkArray;
        });
    }
}
