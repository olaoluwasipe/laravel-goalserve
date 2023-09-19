<?php

namespace CodeBugLab\Goalserve\Repository;

use CodeBugLab\GoalServe\Repository\AbstractRepository;

class SoccerHistoryRepository extends AbstractRepository
{
    private $mainPage = 'soccerhistory';

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerhistory/leagueid/1457-2015-2016
     */
    public function league(int $leagueId, string $season): self
    {
        $this->apiGenerator->api("{$this->mainPage}/leagueid/{$leagueId}-{$season}");
        return $this;
    }
}
