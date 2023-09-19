<?php

namespace CodeBugLab\Goalserve\Repository;

use CodeBugLab\GoalServe\Repository\AbstractRepository;

class SoccerFixturesRepository extends AbstractRepository
{
    private $mainPage = 'soccerfixtures';

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerfixtures/data/mapping?json=1
     */
    public function mapping(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/data/mapping");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerfixtures/data/seasons?json=1
     */
    public function seasons(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/data/seasons");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerfixtures/league/1204?json=1
     */
    public function league(int $leagueId): self
    {
        $this->apiGenerator->api("{$this->mainPage}/league/{$leagueId}");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerfixtures/1204/2618410?json=1
     */
    public function match(int $leagueId, int $matchStaticId): self
    {
        $this->apiGenerator->api("{$this->mainPage}/{$leagueId}/{$matchStaticId}");
        return $this;
    }
}
