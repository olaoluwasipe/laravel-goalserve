<?php

use CodeBugLab\GoalServe\Facades\GoalServe;

it('can get right commentaries league url', function () {
    $url = GoalServe::soccerCommentaries()->league(1204)->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/commentaries/1204?json=1");
});

it('can get right commentaries league url with date filter', function () {
    $url = GoalServe::soccerCommentaries()->league(1204)->date('18.09.2023')->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/commentaries/1204?json=1&date=18.09.2023");
});

it('can get right commentaries match url', function () {
    $matchId = 2505310;
    $leagueId = 1457;
    $url = GoalServe::soccerCommentaries()->match($matchId, $leagueId)->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/commentaries/match?id=2505310&league=1457?json=1");
});

it('can get right commentaries predicted url', function () {
    $leagueId = 1204;
    $url = GoalServe::soccerCommentaries()->predicted($leagueId)->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/commentaries/1204_predicted?json=1");
});