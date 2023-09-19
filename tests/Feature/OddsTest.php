<?php

use CodeBugLab\GoalServe\Facades\GoalServe;

it('can get right soccer odds url', function () {
    $url = GoalServe::odds()->soccer()->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/getodds/soccer?json=1");
});

it('can get right soccer odds url with category filter', function () {
    $url = GoalServe::odds()->soccer()->cat('soccer_10')->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/getodds/soccer?json=1&cat=soccer_10");
});

it('can get right soccer odds url with category and timestamp filter', function () {
    $url = GoalServe::odds()->soccer()->cat('soccer_10')->ts('1474825423341')->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/getodds/soccer?json=1&cat=soccer_10&ts=1474825423341");
});

it('can get right soccer odds url with category and league filter', function () {
    $url = GoalServe::odds()->soccer()->cat('soccer_10')->league('_1204')->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/getodds/soccer?json=1&cat=soccer_10&league=_1204");
});

it('can get right soccer odds url with category and match filter', function () {
    $url = GoalServe::odds()->soccer()->cat('soccer_10')->match('4225845')->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/getodds/soccer?json=1&cat=soccer_10&match=4225845");
});

it('can get right soccer odds url with category and bookmaker filter', function () {
    $url = GoalServe::odds()->soccer()->cat('soccer_10')->bm('16,2')->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/getodds/soccer?json=1&cat=soccer_10&bm=16,2");
});

it('can get right soccer odds url with category and market filter', function () {
    $url = GoalServe::odds()->soccer()->cat('soccer_10')->market('16,2')->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/getodds/soccer?json=1&cat=soccer_10&market=16,2");
});

it('can get right soccer odds url with category and date start and date end filter', function () {
    $url = GoalServe::odds()->soccer()->cat('soccer_10')->dateStart('18.09.2023')->dateEnd('19.09.2023')->url();
    expect($url)->toBe("https://www.goalserve.com/getfeed/" . config('goalserve.api_key') . "/getodds/soccer?json=1&cat=soccer_10&date_start=18.09.2023&date_end=19.09.2023");
});