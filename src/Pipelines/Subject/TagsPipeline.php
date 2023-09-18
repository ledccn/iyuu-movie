<?php

namespace Iyuu\Movie\Pipelines\Subject;

use Iyuu\Movie\Services\TagsServices;

/**
 * 流水线：影视标签
 */
class TagsPipeline implements PipelineInterface
{
    /**
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     */
    public static function process(Payload $payload, callable $next): mixed
    {
        $model = $payload->model;
        $input = $payload->input;
        // 影视标签
        if ($tags = $input->get('tags')) {
            if ($ids = TagsServices::save($model, $tags)) {
                $model->tags = implode(',', $ids);
            }
        }

        return $next($payload);
    }
}
