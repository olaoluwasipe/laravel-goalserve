<?php

namespace CodeBugLab\GoalServe\Filters;

use CodeBugLab\GoalServe\Url\ApiGeneratorInterface;

abstract class ApiFilter implements ApiGeneratorInterface
{
    protected $ApiGenerator;

    protected $parameter;

    public function __construct(ApiGeneratorInterface $ApiGenerator, string|array $parameter)
    {
        $this->ApiGenerator = $ApiGenerator;

        $this->parameter = $parameter;
    }
}
