<?php

namespace CodeBugLab\Goalserve\Repository;

use CodeBugLab\GoalServe\Repository\AbstractRepository;

class SoccerCommentariesRepository extends AbstractRepository
{
    private $mainPage = 'commentaries';

    /**
     * @link https://www.goalserve.com/getfeed/---------/commentaries/1204
     */
    public function league(int $leagueId): self
    {
        $this->apiGenerator->api("{$this->mainPage}/{$leagueId}");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/commentaries/match?id=2505310&league=1457
     */
    public function match(int $matchId,int $leagueId): self
    {
        $this->apiGenerator->api("{$this->mainPage}/match?id={$matchId}&league={$leagueId}");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/commentaries/1204_predicted
     */
    public function predicted(int $leagueId): self
    {
        $this->apiGenerator->api("{$this->mainPage}/{$leagueId}_predicted");
        return $this;
    }
}
