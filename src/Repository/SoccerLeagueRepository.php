<?php

namespace CodeBugLab\Goalserve\Repository;

use CodeBugLab\GoalServe\Repository\AbstractRepository;

class SoccerLeagueRepository extends AbstractRepository
{
    private $mainPage = 'soccerleague';

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerleague/1204?json=1
     */
    public function league(int $leagueId): self
    {
        $this->apiGenerator->api("{$this->mainPage}/{$leagueId}");       
        return $this;
    }
}
