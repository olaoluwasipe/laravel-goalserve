<?php

namespace CodeBugLab\GoalServe\Filters;

class MarketFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&market=" . $this->parameter;
    }
}
