<?php

namespace Iyuu\Movie\Pipelines\Torrent;

/**
 * 管道接口
 */
interface PipelineInterface
{
    /**
     * 契约方法
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     */
    public static function process(Payload $payload, callable $next): mixed;
}
