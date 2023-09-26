<?php

namespace Iyuu\Movie\Support;

use DateTimeInterface;
use support\Model;

/**
 * 模型基础类
 * - Eloquent ORM
 */
class BaseModel extends Model
{
    /**
     * 格式化日期
     *
     * @param DateTimeInterface $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
