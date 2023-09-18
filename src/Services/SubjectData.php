<?php

namespace Iyuu\Movie\Services;

use Iyuu\Movie\Support\HasData;

/**
 * 影视条目：数据结构
 * @property-read int $id 条目ID
 */
class SubjectData
{
    use HasData;

    /**
     * 获取来源站点
     * @return string
     */
    public function getForm(): string
    {
        return $this->get('@form', '');
    }
}
