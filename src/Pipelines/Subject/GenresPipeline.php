<?php

namespace Iyuu\Movie\Pipelines\Subject;

use Iyuu\Movie\Services\GenresServices;

/**
 * 流水线：影视流派
 */
class GenresPipeline implements PipelineInterface
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
        // 影视流派
        if ($genres = $input->get('genres')) {
            if ($ids = GenresServices::save($model, $genres)) {
                $model->genres = implode(',', $ids);
            }
        }

        return $next($payload);
    }
}
