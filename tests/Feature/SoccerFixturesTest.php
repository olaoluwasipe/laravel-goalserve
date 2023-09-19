<?php

use CodeBugLab\GoalServe\Facades\GoalServe;

it('can get right soccer fixtures mapping url', function () {
    $mapping = GoalServe::soccerFixtures()->mapping()->url();
    expect($mapping)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerfixtures/data/mapping?json=1");
});

it('can get right soccer fixtures seasons url', function () {
    $seasons = GoalServe::soccerFixtures()->seasons()->url();
    expect($seasons)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerfixtures/data/seasons?json=1");
});

it('can get right soccer fixtures league url', function () {
    $leagueId = GoalServe::soccerFixtures()->league(1204)->url();
    expect($leagueId)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerfixtures/league/1204?json=1");
});

it('can get right soccer fixtures league url with start_date and end_date filters', function () {
    $leagueId = GoalServe::soccerFixtures()->league(1204)->dateStart('10.03.2024')->dateEnd('16.05.2024')->url();
    expect($leagueId)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerfixtures/league/1204?json=1&date_start=10.03.2024&date_end=16.05.2024");
});

it('can get right soccer fixtures match url', function () {
    $match = GoalServe::soccerFixtures()->match(1204, 2618410)->url();
    expect($match)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/soccerfixtures/1204/2618410?json=1");
});