<?php

namespace Iyuu\Movie\Locker;

use Ledc\Locker\Locker;
use Symfony\Component\Lock\LockInterface;

/**
 * 业务锁：CelebrityLocker
 * @method static LockInterface lock(string $key, ?float $ttl = null, ?bool $autoRelease = null, ?string $prefix = null) 创建锁
 */
class CelebrityLocker extends Locker
{
}
