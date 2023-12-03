<?php

namespace Iyuu\Movie\Pipelines\Torrent;

/**
 * 制作组
 */
class TeamPipeline implements PipelineInterface
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