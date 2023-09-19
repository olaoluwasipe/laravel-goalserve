<?php

namespace CodeBugLab\GoalServe\Tests;

use CodeBugLab\GoalServe\GoalServeServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            GoalServeServiceProvider::class,
        ];
    }
}
