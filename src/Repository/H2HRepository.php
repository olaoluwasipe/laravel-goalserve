<?php

namespace CodeBugLab\Goalserve\Repository;

use CodeBugLab\GoalServe\Repository\AbstractRepository;

class H2HRepository extends AbstractRepository
{
    private $mainPage = 'h2h';

    /**
     * @link https://www.goalserve.com/getfeed/---------/h2h/9260/9249
     */
    public function teams(int $team1Id, int $team2Id): self
    {
        $this->apiGenerator->api("{$this->mainPage}/{$team1Id}/{$team2Id}");
        return $this;
    }
}
