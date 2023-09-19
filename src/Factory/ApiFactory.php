<?php

namespace CodeBugLab\GoalServe\Factory;

use CodeBugLab\GoalServe\Filters\CatFilter;
use CodeBugLab\GoalServe\Exceptions\MethodException;
use CodeBugLab\GoalServe\Url\ApiGeneratorInterface;
use CodeBugLab\GoalServe\Filters\BookmakerFilter;
use CodeBugLab\GoalServe\Filters\DateFilter;
use CodeBugLab\GoalServe\Filters\DateEndFilter;
use CodeBugLab\GoalServe\Filters\DateStartFilter;
use CodeBugLab\GoalServe\Filters\GidFilter;
use CodeBugLab\GoalServe\Filters\LeagueFilter;
use CodeBugLab\GoalServe\Filters\MarketFilter;
use CodeBugLab\GoalServe\Filters\MatchFilter;
use CodeBugLab\GoalServe\Filters\SeasonFilter;
use CodeBugLab\GoalServe\Filters\TimestampFilter;

class ApiFactory implements ApiFactoryInterface
{
    public function getFilter(string $method, string|array $parameter, ApiGeneratorInterface $ApiGenerator)
    {
        switch ($method) {
            case "cat":
                return new CatFilter($ApiGenerator, ...$parameter);
            case "gid":
                return new GidFilter($ApiGenerator, ...$parameter);
            case "date":
                return new DateFilter($ApiGenerator, ...$parameter);
            case "dateStart":
                return new DateStartFilter($ApiGenerator, ...$parameter);
            case "dateEnd":
                return new DateEndFilter($ApiGenerator, ...$parameter);
            case "ts":
                return new TimestampFilter($ApiGenerator, ...$parameter);
            case "league":
                return new LeagueFilter($ApiGenerator, ...$parameter);
            case "match":
                return new MatchFilter($ApiGenerator, ...$parameter);
            case "bm":
                return new BookmakerFilter($ApiGenerator, ...$parameter);
            case "market":
                return new MarketFilter($ApiGenerator, ...$parameter);
            case "season":
                return new SeasonFilter($ApiGenerator, ...$parameter);
            default:
                throw new MethodException("Method '{$method}' isn't supported");
        }
    }
}
