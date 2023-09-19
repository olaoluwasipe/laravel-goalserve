<?php

namespace CodeBugLab\Goalserve\Repository;

use CodeBugLab\GoalServe\Repository\AbstractRepository;

class SoccerStatsRepository extends AbstractRepository
{
    private $mainPage = 'soccerstats';

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerstats/team/leagues_ar
     */
    public function leagues(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/team/leagues_" . config('goalserve.api_language'));
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerstats/team/teams_ar
     */
    public function teams(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/team/teams_" . config('goalserve.api_language'));
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerstats/team/updated_list
     */
    public function teamUpdatedList(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/team/updated_list");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerstats/team/9260
     */
    public function team(int $teamId): self
    {
        $this->apiGenerator->api("{$this->mainPage}/team/{$teamId}");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerstats/player/players_ar
     */
    public function players(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/player/players_" . config('goalserve.api_language'));
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerstats/player/updated_list
     */
    public function playerUpdatedList(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/player/updated_list");
        return $this;
    }

    /**
     * @link https://www.goalserve.com/getfeed/---------/soccerstats/player/138653
     */
    public function player(int $playerId): self
    {
        $this->apiGenerator->api("{$this->mainPage}/player/{$playerId}");
        return $this;
    }
}
