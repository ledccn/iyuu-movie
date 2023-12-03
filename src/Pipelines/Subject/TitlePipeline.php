<?php

namespace Iyuu\Movie\Pipelines\Subject;

use Iyuu\Movie\Services\TitleServices;
use Throwable;

/**
 * 流水线：电影标题、原名、又名
 */
class TitlePipeline implements PipelineInterface
{
    /**
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     * @throws Throwable
     */
    public static function process(Payload $payload, callable $next): mixed
    {
        // 电影标题、原名、又名
        foreach (['title', 'original_title', 'aka'] as $value) {
            $ids = TitleServices::save($payload->model, $payload->input->get($value, []));
            if ($ids) {
                $payload->model->{$value} = implode(',', $ids);
            }
        }

        return $next($payload);
    }
}
