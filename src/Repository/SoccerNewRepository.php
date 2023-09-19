<?php

namespace CodeBugLab\Goalserve\Repository;

use CodeBugLab\GoalServe\Repository\AbstractRepository;

class SoccerNewRepository extends AbstractRepository
{
    private $mainPage = 'soccernew';

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccernew/home?json=1
     */
    public function home(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/home");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccernew/live?json=1
     */
    public function live(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/live");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccernew/d1?json=1
     */
    public function nextGames(int $days): self
    {
        $this->apiGenerator->api("{$this->mainPage}/d{$days}");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccernew/d-1?json=1
     */
    public function previousGames(int $days): self
    {
        $this->apiGenerator->api("{$this->mainPage}/d-{$days}");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccernew/injuries?json=1
     */
    public function injuries(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/injuries");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccernew/inplay-mapping?json=1
     */
    public function inplayMapping(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/inplay-mapping");
        return $this;
    }
}
