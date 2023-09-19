<?php

namespace CodeBugLab\GoalServe\Filters;

class MatchFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&match=" . $this->parameter;
    }
}
