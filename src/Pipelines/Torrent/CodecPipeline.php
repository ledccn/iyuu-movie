<?php

namespace Iyuu\Movie\Pipelines\Torrent;

use Iyuu\Movie\Model\PtCodec;

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
        $input  = $payload->input;
        if ($val = $input->codec) {
            $model = PtCodec::firstOrCreate(['content' => $val]);
            $payload->model->medium = $model->codec_id;
        }
        return $next($payload);
    }
}
