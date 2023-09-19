<?php

namespace CodeBugLab\GoalServe;

use CodeBugLab\Goalserve\Repository\H2HRepository;
use CodeBugLab\Goalserve\Repository\OddsRepository;
use CodeBugLab\Goalserve\Repository\SoccerCommentariesRepository;
use CodeBugLab\Goalserve\Repository\SoccerFixturesRepository;
use CodeBugLab\Goalserve\Repository\SoccerHistoryRepository;
use CodeBugLab\Goalserve\Repository\SoccerLeagueRepository;
use CodeBugLab\Goalserve\Repository\SoccerNewRepository;
use CodeBugLab\GoalServe\Repository\SoccerStatsRepository;
use CodeBugLab\Goalserve\Repository\StandingsRepository;

class GoalServe
{
    public function __construct(
        private SoccerStatsRepository $soccerStatsRepository,
        private SoccerFixturesRepository $soccerFixturesRepository,
        private SoccerLeagueRepository $soccerLeagueRepository,
        private SoccerNewRepository $soccerNewRepository,
        private SoccerCommentariesRepository $soccerCommentariesRepository,
        private OddsRepository $oddsRepository,
        private StandingsRepository $standingsRepository,
        private H2HRepository $h2hRepository,
        private SoccerHistoryRepository $soccerHistoryRepository,
    ) {
    }

    public function soccerStats(): SoccerStatsRepository
    {
        return $this->soccerStatsRepository;
    }

    public function soccerFixtures(): SoccerFixturesRepository
    {
        return $this->soccerFixturesRepository;
    }

    public function soccerLeague(): SoccerLeagueRepository
    {
        return $this->soccerLeagueRepository;
    }

    public function soccerNew(): SoccerNewRepository
    {
        return $this->soccerNewRepository;
    }

    public function soccerCommentaries(): SoccerCommentariesRepository
    {
        return $this->soccerCommentariesRepository;
    }

    public function odds(): OddsRepository
    {
        return $this->oddsRepository;
    }

    public function standings(): StandingsRepository
    {
        return $this->standingsRepository;
    }

    public function h2h(): H2HRepository
    {
        return $this->h2hRepository;
    }

    public function soccerHistory(): SoccerHistoryRepository
    {
        return $this->soccerHistoryRepository;
    }
}
