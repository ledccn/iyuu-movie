<?php

namespace Iyuu\Movie\Pipelines\Torrent;

use Iyuu\Movie\Model\PtStandard;

/**
 * 分辨率
 */
class StandardPipeline implements PipelineInterface
{
    /**
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     */
    public static function process(Payload $payload, callable $next): mixed
    {
        $input  = $payload->input;
        if ($val = $input->standard) {
            $model = PtStandard::firstOrCreate(['content' => $val]);
            $payload->model->medium = $model->standard_id;
        }
        return $next($payload);
    }
}
