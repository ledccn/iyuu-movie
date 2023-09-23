<?php
declare (strict_types=1);

namespace Iyuu\Movie\Dispatch;

/**
 * 枚举：任务状态
 */
enum StateEnum: int
{
    /**
     * 默认值
     */
    case Default = 0;

    /**
     * 错误
     */
    case Error = -1;

    /**
     * 成功
     */
    case Success = 1;
}
