<?php

namespace Iyuu\Movie\Pipelines\Torrent;

use Iyuu\Movie\Model\PtCategory;

/**
 * 分类
 */
class CategoryPipeline implements PipelineInterface
{
    /**
     * @param Payload $payload
     * @param callable $next
     * @return mixed
     */
    public static function process(Payload $payload, callable $next): mixed
    {
        $input  = $payload->input;
        if ($val = $input->category) {
            $model = PtCategory::firstOrCreate(['content' => $val]);
            $payload->model->category = $model->category_id;
        }
        return $next($payload);
    }
}
