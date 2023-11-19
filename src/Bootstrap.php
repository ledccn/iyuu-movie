<?php

namespace Iyuu\Movie;

use Iyuu\Movie\Dispatch\MetaDispatch;
use Iyuu\Movie\Dispatch\MetaDispatchObserver;
use Iyuu\Movie\Model\MetaCelebrity;
use Iyuu\Movie\Model\MetaCelebrityRelation;
use Iyuu\Movie\Model\MetaContent;
use Iyuu\Movie\Model\MetaCountriesRelation;
use Iyuu\Movie\Model\MetaCountry;
use Iyuu\Movie\Model\MetaGenre;
use Iyuu\Movie\Model\MetaGenresRelation;
use Iyuu\Movie\Model\MetaImdb;
use Iyuu\Movie\Model\MetaImdbNm;
use Iyuu\Movie\Model\MetaLanguage;
use Iyuu\Movie\Model\MetaLanguagesRelation;
use Iyuu\Movie\Model\MetaName;
use Iyuu\Movie\Model\MetaNameRelation;
use Iyuu\Movie\Model\MetaSubject;
use Iyuu\Movie\Model\MetaSubjectAttent;
use Iyuu\Movie\Model\MetaTag;
use Iyuu\Movie\Model\MetaTagsRelation;
use Iyuu\Movie\Model\MetaTitle;
use Iyuu\Movie\Model\MetaTitleRelation;
use Iyuu\Movie\Model\PtTorrent;
use Iyuu\Movie\Observer\MetaCelebrityObserver;
use Iyuu\Movie\Observer\MetaCelebrityRelationObserver;
use Iyuu\Movie\Observer\MetaContentObserver;
use Iyuu\Movie\Observer\MetaCountriesRelationObserver;
use Iyuu\Movie\Observer\MetaCountryObserver;
use Iyuu\Movie\Observer\MetaGenreObserver;
use Iyuu\Movie\Observer\MetaGenresRelationObserver;
use Iyuu\Movie\Observer\MetaImdbNmObserver;
use Iyuu\Movie\Observer\MetaImdbObserver;
use Iyuu\Movie\Observer\MetaLanguageObserver;
use Iyuu\Movie\Observer\MetaLanguagesRelationObserver;
use Iyuu\Movie\Observer\MetaNameObserver;
use Iyuu\Movie\Observer\MetaNameRelationObserver;
use Iyuu\Movie\Observer\MetaSubjectAttentObserver;
use Iyuu\Movie\Observer\MetaSubjectObserver;
use Iyuu\Movie\Observer\MetaTagObserver;
use Iyuu\Movie\Observer\MetaTagsRelationObserver;
use Iyuu\Movie\Observer\MetaTitleObserver;
use Iyuu\Movie\Observer\MetaTitleRelationObserver;
use Iyuu\Movie\Observer\PtTorrentObserver;
use Workerman\Worker;

/**
 * 进程启动时onWorkerStart时运行的回调配置
 * @link https://learnku.com/articles/6657/model-events-and-observer-in-laravel
 */
class Bootstrap implements \Webman\Bootstrap
{
    /**
     * @param Worker|null $worker
     * @return void
     */
    public static function start(?Worker $worker): void
    {
        //【新增】依次触发的顺序是：
        //saving -> creating -> created -> saved

        //【更新】依次触发的顺序是:
        //saving -> updating -> updated -> saved

        // updating 和 updated 会在数据库中的真值修改前后触发。
        // saving 和 saved 则会在 Eloquent 实例的 original 数组真值更改前后触发
        MetaCelebrity::observe(MetaCelebrityObserver::class);
        MetaCelebrityRelation::observe(MetaCelebrityRelationObserver::class);
        MetaContent::observe(MetaContentObserver::class);
        MetaCountriesRelation::observe(MetaCountriesRelationObserver::class);
        MetaCountry::observe(MetaCountryObserver::class);
        MetaGenre::observe(MetaGenreObserver::class);
        MetaGenresRelation::observe(MetaGenresRelationObserver::class);
        MetaImdbNm::observe(MetaImdbNmObserver::class);
        MetaImdb::observe(MetaImdbObserver::class);
        MetaLanguage::observe(MetaLanguageObserver::class);
        MetaLanguagesRelation::observe(MetaLanguagesRelationObserver::class);
        MetaName::observe(MetaNameObserver::class);
        MetaNameRelation::observe(MetaNameRelationObserver::class);
        MetaSubjectAttent::observe(MetaSubjectAttentObserver::class);
        MetaSubject::observe(MetaSubjectObserver::class);
        MetaTag::observe(MetaTagObserver::class);
        MetaTagsRelation::observe(MetaTagsRelationObserver::class);
        MetaTitle::observe(MetaTitleObserver::class);
        MetaTitleRelation::observe(MetaTitleRelationObserver::class);
        PtTorrent::observe(PtTorrentObserver::class);

        MetaDispatch::observe(MetaDispatchObserver::class);
    }
}
