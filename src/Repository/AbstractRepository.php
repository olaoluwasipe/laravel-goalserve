<?php

namespace CodeBugLab\GoalServe\Repository;

use CodeBugLab\GoalServe\Factory\ApiFactory;
use CodeBugLab\GoalServe\Helper\CurlHelper;
use CodeBugLab\GoalServe\Url\ApiGenerator;

class AbstractRepository
{
    public static $apiUrl = "https://www.goalserve.com/getfeed/";

    protected $appendToResponse;

    public function __construct(protected ApiGenerator $apiGenerator)
    {
    }

    /**
     * This magic method responsible for applying all goalserve filters parameters
     * From the factory instead of making separated methods for every one
     * Like date(), league(), season(), etc...
     */
    public function __call(string $method, array $args): self
    {
        $filter = (new ApiFactory())->getFilter($method, $args, $this->apiGenerator);

        $this->apiGenerator->filter($filter);

        return $this;
    }

    public function get(): ?array
    {
        return $this->response($this->apiGenerator->getUrl());
    }

    public function url(): string
    {
        return $this->apiGenerator->getUrl();
    }

    protected function response($url): ?array
    {
        return json_decode(CurlHelper::get($url, $this->getHeaders()), true);
    }

    protected function getHeaders(): array
    {
        return [
            "Content-type: application/json;charset=utf-8"
        ];
    }
}
