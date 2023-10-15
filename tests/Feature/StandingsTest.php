<?php

use CodeBugLab\GoalServe\Facades\GoalServe;

it('can get right standings url', function () {
    $url = GoalServe::standings()->league(1205)->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/standings/1205.xml?json=1");
});

it('can get right standings url with season filter', function () {
    $url = GoalServe::standings()->league(1205)->season('2018-2019')->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/standings/1205.xml?json=1&season=2018-2019");
});
