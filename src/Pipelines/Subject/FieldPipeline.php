<?php

namespace Iyuu\Movie\Pipelines\Subject;

use Iyuu\Movie\Services\ContentServices;

/**
 * 流水线：表基础字段
 */
class FieldPipeline implements PipelineInterface
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
        // IMDb编号、条目页url
        $model->imdb = $input->get('imdb', '');
        $model->alt = $input->get('alt', '');

        // 年份
        $year = $input->get('year');
        if ($year && ctype_digit((string)$year)) {
            $model->year = $year;
        }

        // 评分、评分人数
        $model->rating_value = $input->get('rating.average', 0);
        $model->rating_count = $input->get('rating.numRaters', 0);

        // 电影海报图
        $model->images = $input->get('images.small', $input->get('images.large', ''));

        // 条目子分类
        $subtype = $input->get('subtype', '');
        $model->subtype = strtolower($subtype);

        // 简介
        $model->summary = ContentServices::save($input->get('summary', ''));

        // 上映首映日期
        if ($pubdates = $input->get('pubdates', [])) {
            $model->pubdates = json_encode($pubdates, JSON_UNESCAPED_UNICODE);
        }

        // 大陆上映日期
        $model->mainland_pubdate = $input->get('mainland_pubdate') ?: null;

        // 总季数、当前季数
        $seasons_count = $input->get('seasons_count');
        $current_season = $input->get('current_season');
        $episodes_count = $input->get('episodes_count');
        if (ctype_digit((string)$seasons_count)) {
            $model->seasons_count = $seasons_count;
        }
        if (ctype_digit((string)$current_season)) {
            $model->current_season = $current_season;
        }

        // 当前季的集数
        if (is_array($episodes_count)) {
            $episodes_count = array_shift($episodes_count);
        }
        if (ctype_digit((string)$episodes_count)) {
            $model->episodes_count = $episodes_count;
        }

        return $next($payload);
    }
}
