<?php

namespace Iyuu\Movie\Locker;

use Ledc\Locker\Locker;
use Symfony\Component\Lock\LockInterface;

/**
 * 业务锁：TorrentLockerLocker
 * @method static LockInterface lock(?string $key = null, ?float $ttl = null, ?bool $autoRelease = null, ?string $prefix = null) 并发锁
 * @method static LockInterface create(?string $key = null, ?float $ttl = null, ?bool $autoRelease = null, ?string $prefix = null) 创建锁
 */
class TorrentLocker extends Locker
{
}
