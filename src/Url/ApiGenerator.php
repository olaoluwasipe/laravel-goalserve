<?php

namespace CodeBugLab\GoalServe\Url;

use CodeBugLab\GoalServe\Filters\ApiFilter;

class ApiGenerator implements ApiGeneratorInterface
{
    public $url;

    protected $apiUrl;

    protected $apiKey;

    public function __construct(string $apiUrl, string $apiKey)
    {
        $this->apiUrl = $apiUrl;

        $this->apiKey = $apiKey;
    }

    public function api($path)
    {
        $suffix = strpos($path, '_json') !== false ? '' : '?json=1';

        $this->url = $this->apiUrl . $this->apiKey . '/' . $path . $suffix;
    }

    public function filter(ApiFilter $apiFilter)
    {
        $this->url = $apiFilter->getUrl();
    }

    public function getUrl()
    {
        return $this->url;
    }
}
