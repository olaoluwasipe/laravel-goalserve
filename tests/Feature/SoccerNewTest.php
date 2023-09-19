<?php

use CodeBugLab\GoalServe\Facades\GoalServe;

it('can get right soccer new home url', function () {
    $home = GoalServe::soccerNew()->home()->url();
    expect($home)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccernew/home?json=1");
});

it('can get right soccer new home url with cat filter', function () {
    $home = GoalServe::soccerNew()->home()->cat(1204)->url();
    expect($home)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccernew/home?json=1&cat=1204");
});

it('can get right soccer new home url with gid filter', function () {
    $home = GoalServe::soccerNew()->home()->gid(1204)->url();
    expect($home)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccernew/home?json=1&gid=1204");
});

it('can get right soccer new live url', function () {
    $live = GoalServe::soccerNew()->live()->url();
    expect($live)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccernew/live?json=1");
});

it('can get right soccer new next games url', function () {
    $nextGames = GoalServe::soccerNew()->nextGames(1)->url();
    expect($nextGames)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccernew/d1?json=1");
});

it('can get right soccer new previous games url', function () {
    $previousGames = GoalServe::soccerNew()->previousGames(1)->url();
    expect($previousGames)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccernew/d-1?json=1");
});

it('can get right soccer new injuries url', function () {
    $injuries = GoalServe::soccerNew()->injuries()->url();
    expect($injuries)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccernew/injuries?json=1");
});

it('can get right soccer new inplay mapping url', function () {
    $inplayMapping = GoalServe::soccerNew()->inplayMapping()->url();
    expect($inplayMapping)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccernew/inplay-mapping?json=1");
});