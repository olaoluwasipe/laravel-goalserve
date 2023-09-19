<?php

use CodeBugLab\GoalServe\Exceptions\MethodException;
use CodeBugLab\GoalServe\Facades\GoalServe;

it('can get exception when method not supported', function () {
    $this->expectException(MethodException::class);
    GoalServe::h2h()->teams(9260, 9249)->wrongMethod()->get();
});

it('do not get exception when method supported', function () {
    GoalServe::h2h()->teams(9260, 9249)->get();
    expect(true)->toBeTrue();
})->skip();