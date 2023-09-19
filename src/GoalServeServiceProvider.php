<?php

namespace CodeBugLab\GoalServe;

use CodeBugLab\GoalServe\Repository\AbstractRepository;
use CodeBugLab\GoalServe\Url\ApiGenerator;
use Illuminate\Support\ServiceProvider;

class GoalServeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/goalserve.php',
            'goalserve'
        );

        $this->publishes([
            __DIR__ . '/config/goalserve.php' => config_path('goalserve.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->bind(ApiGenerator::class, function () {
            return new ApiGenerator(AbstractRepository::$apiUrl, config('goalserve.api_key'));
        });

        $this->app->bind('GoalServe', function () {
            return new GoalServe(
                new Repository\SoccerStatsRepository(app(ApiGenerator::class)),
                new Repository\SoccerFixturesRepository(app(ApiGenerator::class)),
                new Repository\SoccerLeagueRepository(app(ApiGenerator::class)),
                new Repository\SoccerNewRepository(app(ApiGenerator::class)),
                new Repository\SoccerCommentariesRepository(app(ApiGenerator::class)),
                new Repository\OddsRepository(app(ApiGenerator::class)),
                new Repository\StandingsRepository(app(ApiGenerator::class)),
                new Repository\H2HRepository(app(ApiGenerator::class)),
                new Repository\SoccerHistoryRepository(app(ApiGenerator::class)),
            );
        });
    }
}
