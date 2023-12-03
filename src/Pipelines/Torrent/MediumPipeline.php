<?php

namespace Iyuu\Movie\Pipelines\Torrent;

use Iyuu\Movie\Model\PtMedium;

/**
 * 媒介
 */
class MediumPipeline implements PipelineInterface
{
    /**
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     */
    public static function process(Payload $payload, callable $next): mixed
    {
        $input  = $payload->input;
        if ($val = $input->medium) {
            $model = PtMedium::firstOrCreate(['content' => $val]);
            $payload->model->medium = $model->medium_id;
        }
        return $next($payload);
    }
}
