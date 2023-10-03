<?php

use CodeBugLab\GoalServe\Facades\GoalServe;

it('can get right soccer stats leagues url', function () {
    $leagues = GoalServe::soccerStats()->leagues()->url();
    expect($leagues)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerstats/team/leagues_" . config('goalserve.api_language') . "?json=1");
});

it('can get right soccer stats teams url', function () {
    $teams = GoalServe::soccerStats()->teams()->url();
    expect($teams)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerstats/team/teams_" . config('goalserve.api_language') . "?json=1");
});

it('can get right soccer stats team updated list url', function () {
    $teamUpdatedList = GoalServe::soccerStats()->teamUpdatedList()->url();
    expect($teamUpdatedList)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerstats/team/updated_list?json=1");
});

it('can get right soccer stats team updated list url with date filter', function () {
    $teamUpdatedList = GoalServe::soccerStats()->teamUpdatedList()->date('15.03.2021')->url();
    expect($teamUpdatedList)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerstats/team/updated_list?json=1&date=15.03.2021");
});

it('can get right soccer stats team url', function () {
    $team = GoalServe::soccerStats()->team(9260)->url();
    expect($team)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerstats/team/9260?json=1");
});

it('can get right soccer stats players url', function () {
    $players = GoalServe::soccerStats()->players()->url();
    expect($players)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerstats/player/players_" . config('goalserve.api_language') . "_json");
});

it('can get right soccer stats player updated list url', function () {
    $playerUpdatedList = GoalServe::soccerStats()->playerUpdatedList()->url();
    expect($playerUpdatedList)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerstats/player/updated_list?json=1");
});

it('can get right soccer stats player updated list url with date filter', function () {
    $playerUpdatedList = GoalServe::soccerStats()->playerUpdatedList()->date('15.03.2021')->url();
    expect($playerUpdatedList)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerstats/player/updated_list?json=1&date=15.03.2021");
});

it('can get right soccer stats player url', function () {
    $player = GoalServe::soccerStats()->player(138653)->url();
    expect($player)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerstats/player/138653?json=1");
});

it('can get right soccer stats player data', function () {
    $player = GoalServe::soccerStats()->player(138653)->get();
    expect($player)->toBeArray();
})->skip();
