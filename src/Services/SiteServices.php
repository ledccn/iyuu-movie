<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Model\MetaSite;
use support\exception\BusinessException;

/**
 * 服务层：站点
 */
class SiteServices
{
    /**
     * 获取站点ID
     * @param string $name
     * @return int
     * @throws BusinessException
     */
    public static function getSiteId(string $name): int
    {
        $id = MetaSite::getPkByName($name);
        if (empty($id)) {
            throw new BusinessException('站点不存在');
        }

        return $id;
    }
}
