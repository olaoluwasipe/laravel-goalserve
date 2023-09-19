<?php

use CodeBugLab\GoalServe\Facades\GoalServe;

it('can get right soccer league url', function () {
    $league = GoalServe::soccerLeague()->league(1204)->url();
    expect($league)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerleague/1204?json=1");
});