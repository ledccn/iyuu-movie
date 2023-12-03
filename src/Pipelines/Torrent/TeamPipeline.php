<?php

namespace Iyuu\Movie\Pipelines\Torrent;

use Iyuu\Movie\Model\PtTeam;

/**
 * 制作组
 */
class TeamPipeline implements PipelineInterface
{
    /**
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     */
    public static function process(Payload $payload, callable $next): mixed
    {
        $input  = $payload->input;
        if ($val = $input->team) {
            $model = PtTeam::firstOrCreate(['content' => $val]);
            $payload->model->team = $model->team_id;
        }
        return $next($payload);
    }
}
