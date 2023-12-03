<?php

namespace Iyuu\Movie\Pipelines\Torrent;

use Iyuu\Movie\Model\PtAudiocodec;

/**
 * 音频编码
 */
class AudioCodecPipeline implements PipelineInterface
{
    /**
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     */
    public static function process(Payload $payload, callable $next): mixed
    {
        $input  = $payload->input;
        if ($val = $input->audiocodec) {
            $model = PtAudiocodec::firstOrCreate(['content' => $val]);
            $payload->model->medium = $model->audiocodec_id;
        }
        return $next($payload);
    }
}