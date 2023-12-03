<?php

namespace Iyuu\Movie\Pipelines\Subject;

use Iyuu\Movie\Services\LanguagesServices;
use Throwable;

/**
 * 流水线：影视语言
 */
class LanguagesPipeline implements PipelineInterface
{
    /**
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     * @throws Throwable
     */
    public static function process(Payload $payload, callable $next): mixed
    {
        $model = $payload->model;
        $input = $payload->input;
        // 影视语言
        if ($languages = $input->get('languages')) {
            if ($ids = LanguagesServices::save($model, $languages)) {
                $model->languages = implode(',', $ids);
            }
        }

        return $next($payload);
    }
}
