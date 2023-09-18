<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaContent;

/**
 * 服务：剧情简介
 */
class ContentServices
{
    /**
     * 保存
     * @param string $content
     * @return int|null
     */
    public static function save(string $content): ?int
    {
        if (empty($content)) {
            return null;
        }

        $sha1 = sha1($content);
        $model = MetaContent::updateOrCreate(['sha1' => $sha1], ['content' => $content]);

        return $model->id;
    }
}