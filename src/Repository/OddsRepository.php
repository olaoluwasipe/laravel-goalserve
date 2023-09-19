<?php

namespace CodeBugLab\Goalserve\Repository;

use CodeBugLab\GoalServe\Repository\AbstractRepository;

class OddsRepository extends AbstractRepository
{
    private $mainPage = 'getodds';

    /**
     * @link https://www.goalserve.com/getfeed/---------/getodds/soccer
     */
    public function soccer(): self
    {
        $this->apiGenerator->api("{$this->mainPage}/soccer");
        return $this;
    }
}
