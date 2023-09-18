<?php

namespace Iyuu\Movie\Pipelines\Subject;

use Iyuu\Movie\Services\CountryServices;

/**
 * 流水线：影视制片国家地区
 */
class CountryPipeline implements PipelineInterface
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
        // 影视制片国家地区
        if ($countries = $input->get('countries')) {
            if ($ids = CountryServices::save($model, $countries)) {
                $model->countries = implode(',', $ids);
            }
        }

        return $next($payload);
    }
}
