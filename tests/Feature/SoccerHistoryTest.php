<?php

use CodeBugLab\GoalServe\Facades\GoalServe;

it('can get right soccer history url', function () {
    $url = GoalServe::soccerHistory()->league(1457, '2015-2016')->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerhistory/leagueid/1457-2015-2016?json=1");
});