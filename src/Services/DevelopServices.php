<?php

namespace Iyuu\Movie\Services;

use support\Db;

/**
 * 开发者
 */
class DevelopServices
{
    /**
     * 清空数据表
     * @return void
     */
    public static function truncate(): void
    {
        $rows = [
            'TRUNCATE `meta_celebrity`;',
            'TRUNCATE `meta_celebrity_relation`;',
            'TRUNCATE `meta_content`;',
            'TRUNCATE `meta_countries`;',
            'TRUNCATE `meta_countries_relation`;',
            'TRUNCATE `meta_genres`;',
            'TRUNCATE `meta_genres_relation`;',
            'TRUNCATE `meta_imdb`;',
            'TRUNCATE `meta_imdb_nm`;',
            'TRUNCATE `meta_languages`;',
            'TRUNCATE `meta_languages_relation`;',
            'TRUNCATE `meta_name`;',
            'TRUNCATE `meta_name_relation`;',
            'TRUNCATE `meta_subject`;',
            'TRUNCATE `meta_subject_attent`;',
            'TRUNCATE `meta_tags`;',
            'TRUNCATE `meta_tags_relation`;',
            'TRUNCATE `meta_title`;',
            'TRUNCATE `meta_title_relation`;',
        ];
        foreach ($rows as $sql) {
            Db::statement($sql);
        }
    }
}
