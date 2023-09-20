<?php

namespace Iyuu\Movie\Services;

use Illuminate\Pipeline\Pipeline;
use Iyuu\Movie\Constants\SiteEnum;
use Iyuu\Movie\Locker\SubjectLocker;
use Iyuu\Movie\Model\MetaSubject;
use Iyuu\Movie\Pipelines\Subject\CelebrityPipeline;
use Iyuu\Movie\Pipelines\Subject\CountryPipeline;
use Iyuu\Movie\Pipelines\Subject\FieldPipeline;
use Iyuu\Movie\Pipelines\Subject\GenresPipeline;
use Iyuu\Movie\Pipelines\Subject\LanguagesPipeline;
use Iyuu\Movie\Pipelines\Subject\Payload;
use Iyuu\Movie\Pipelines\Subject\TagsPipeline;
use Iyuu\Movie\Pipelines\Subject\TitlePipeline;
use support\Db;
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
     * @throws BusinessException
     */
    public static function create(SubjectData $input): int
    {
        $sitename = $input->getForm();
        $sites_id = SiteEnum::create($sitename)->getId();
        $subject_sn = $input->id;
        $model = MetaSubject::getModelByUnique($sites_id, $subject_sn);
        if ($model) {
            return $model->id;
        }

        $lock = SubjectLocker::lock($sites_id . ':' . $subject_sn, 10, true);
        if (!$lock->acquire()) {
            throw new BusinessException('未获取到锁');
        }

        $model = new MetaSubject();
        $model->sites_id = $sites_id;
        $model->subject_sn = $subject_sn;
        if (true !== $model->save()) {
            throw new BusinessException('创建影视条目失败');
        }

        return self::update($sitename, $model, $input);
    }

    /**
     * 更新
     * @param string $sitename
     * @param MetaSubject $model
     * @param SubjectData $input
     * @return int
     */
    public static function update(string $sitename, MetaSubject $model, SubjectData $input): int
    {
        return Db::transaction(function () use ($sitename, $model, $input) {
            match ($sitename) {
                'douban' => self::updateByDouban($model, $input),
                default => ''
            };

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
