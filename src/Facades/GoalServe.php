<?php

namespace CodeBugLab\GoalServe\Facades;

use Illuminate\Support\Facades\Facade;

class GoalServe extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'GoalServe';
    }
}
