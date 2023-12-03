<?php

namespace Iyuu\Movie\Services;

use Illuminate\Pipeline\Pipeline;
use Iyuu\Movie\Api\Dispatcher;
use Iyuu\Movie\Constants\SiteEnum;
use Iyuu\Movie\Dispatch\SubTypeEnum;
use Iyuu\Movie\Dispatch\TypeEnum;
use Iyuu\Movie\Locker\SubjectLocker;
use Iyuu\Movie\Model\MetaSubject;
use Iyuu\Movie\Pipelines\Subject\CelebrityPipeline;
use Iyuu\Movie\Pipelines\Subject\CountryPipeline;
use Iyuu\Movie\Pipelines\Subject\FieldPipeline;
use Iyuu\Movie\Pipelines\Subject\GenresPipeline;
use Iyuu\Movie\Pipelines\Subject\LanguagesPipeline;
use Iyuu\Movie\Pipelines\Subject\Payload;
use Iyuu\Movie\Pipelines\Subject\SubjectData;
use Iyuu\Movie\Pipelines\Subject\TagsPipeline;
use Iyuu\Movie\Pipelines\Subject\TitlePipeline;
use plugin\admin\app\common\Util;
use support\exception\BusinessException;
use Throwable;

/**
 * 服务：影视条目
 */
class SubjectServices
{
    /**
     * 创建
     * @param SubjectData $input
     * @return int
     * @throws BusinessException|Throwable
     */
    public static function create(SubjectData $input): int
    {
        $site_name = $input->getForm();
        $sites_id = SiteEnum::create($site_name)->value;
        $subject_sn = $input->id;
        $lock = SubjectLocker::lock($sites_id . ':' . $subject_sn, 10, true);
        if (!$lock->acquire()) {
            throw new BusinessException('未获取到锁');
        }

        $model = MetaSubject::getModelByUnique($sites_id, $subject_sn);
        if ($model) {
            if ($model->state) {
                return $model->id;
            }
        } else {
            $model = new MetaSubject();
            $model->sites_id = $sites_id;
            $model->subject_sn = $subject_sn;
            if (true !== $model->save()) {
                throw new BusinessException('创建影视条目失败');
            }
        }

        return self::update($site_name, $model, $input);
    }

    /**
     * 更新
     * @param string $site_name
     * @param MetaSubject $model
     * @param SubjectData $input
     * @return int
     * @throws Throwable
     */
    public static function update(string $site_name, MetaSubject $model, SubjectData $input): int
    {
        return Util::db()->transaction(function () use ($site_name, $model, $input) {
            match ($site_name) {
                'douban' => self::updateByDouban($model, $input),
                default => ''
            };

            try {
                $siteEnum = SiteEnum::from($model->sites_id);
                Dispatcher::success(TypeEnum::create($siteEnum->name), SubTypeEnum::subject, $model->subject_sn);
            } catch (Throwable $throwable) {
            }

            return $model->id;
        });
    }

    /**
     * 创建：豆瓣
     * @param MetaSubject $model
     * @param SubjectData $input
     * @return void
     * @throws BusinessException
     */
    protected static function updateByDouban(MetaSubject $model, SubjectData $input): void
    {
        try {
            $payload = new Payload($model, $input);
            $pipeline = new Pipeline();
            $pipeline->send($payload)
                ->through([
                    [CelebrityPipeline::class, 'process'],
                    [TitlePipeline::class, 'process'],
                    [FieldPipeline::class, 'process'],
                    [TagsPipeline::class, 'process'],
                    [LanguagesPipeline::class, 'process'],
                    [GenresPipeline::class, 'process'],
                    [CountryPipeline::class, 'process'],
                ])
                ->thenReturn();

            $model->state = 1;
            $model->save();
        } catch (Throwable $throwable) {
            $model->state = 0;
            $model->save();
            throw new BusinessException($throwable->getMessage(), $throwable->getCode());
        }
    }
}
