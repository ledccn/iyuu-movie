<?php

namespace Iyuu\Movie\Locker;

use Ledc\Locker\Locker;
use Symfony\Component\Lock\LockInterface;

/**
 * 业务锁：SubjectLocker
 * @method static LockInterface lock(string $sites_id_subject_sn, ?float $ttl = null, ?bool $autoRelease = null, ?string $prefix = null) 创建锁
 */
class SubjectLocker extends Locker
{
}
