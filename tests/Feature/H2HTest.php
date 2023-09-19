<?php

use CodeBugLab\GoalServe\Facades\GoalServe;

it('can get right head to head url', function () {
    $url = GoalServe::h2h()->teams(9260, 9249)->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/h2h/9260/9249?json=1");
});