<?php

namespace Iyuu\Movie\Pipelines\Torrent;

/**
 * 分类
 */
class CategoryPipeline implements PipelineInterface
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