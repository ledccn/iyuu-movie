<?php

namespace Iyuu\Movie\Pipelines\Torrent;

/**
 * 分辨率
 */
class StandardPipeline implements PipelineInterface
{
    /**
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     */
    public static function process(Payload $payload, callable $next): mixed
    {
        return $next($payload);
    }
}