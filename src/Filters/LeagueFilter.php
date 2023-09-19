<?php

namespace CodeBugLab\GoalServe\Filters;

class LeagueFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&league=" . $this->parameter;
    }
}
