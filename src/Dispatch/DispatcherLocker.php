<?php

namespace Iyuu\Movie\Dispatch;

use Ledc\Locker\Locker;
use Symfony\Component\Lock\LockInterface;

/**
 * 业务锁：DispatcherLocker
 * @method static LockInterface lock(?string $key = null, ?float $ttl = null, ?bool $autoRelease = null, ?string $prefix = null) 创建锁
 */
class DispatcherLocker extends Locker
{
}
