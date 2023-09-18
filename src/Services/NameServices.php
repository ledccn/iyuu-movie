<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaName;

/**
 * 服务：影人名字
 */
class NameServices
{
    /**
     * @param string $name
     * @return int
     */
    public static function updateOrCreate(string $name): int
    {
        if (0 === strlen($name)) {
            $name = '匿名';
        }
        $model = MetaName::updateOrCreate(compact('name'));
        return $model->name_id;
    }
}
