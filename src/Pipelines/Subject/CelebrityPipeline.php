<?php

namespace Iyuu\Movie\Pipelines\Subject;

use Iyuu\Movie\Services\CelebrityServices;
use Throwable;

/**
 * 流水线：导演、编剧、演职员
 */
class CelebrityPipeline implements PipelineInterface
{
    /**
     * 契约方法
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     * @throws Throwable
     */
    public static function process(Payload $payload, callable $next): mixed
    {
        // 导演、编剧、演职员
        $map = ['directors', 'writers', 'casts'];
        foreach ($map as $v) {
            $ids = CelebrityServices::updateOrCreateByDouban($payload->model, $payload->input->get($v, []));
            if ($ids) {
                $payload->model->{$v} = implode(',', $ids);
            }
        }

        return $next($payload);
    }
}
