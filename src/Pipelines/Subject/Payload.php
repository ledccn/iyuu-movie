<?php

namespace Iyuu\Movie\Pipelines\Subject;

use Iyuu\Movie\Model\MetaSubject;

/**
 * 原始数据
 */
class Payload
{
    /**
     * 构造函数
     * @param MetaSubject $model
     * @param SubjectData $input
     */
    public function __construct(public MetaSubject $model, public SubjectData $input)
    {
    }
}
