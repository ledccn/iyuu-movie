<?php

namespace Iyuu\Movie\Pipelines\Torrent;

/**
 * 视频编码
 */
class CodecPipeline implements PipelineInterface
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