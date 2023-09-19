<?php

namespace CodeBugLab\GoalServe\Factory;

use CodeBugLab\GoalServe\Url\ApiGeneratorInterface;

interface ApiFactoryInterface
{
    public function getFilter(string $method, string|array $parameter, ApiGeneratorInterface $ApiGenerator);
}
