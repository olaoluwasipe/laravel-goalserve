<?php

namespace CodeBugLab\GoalServe\Filters;

class SeasonFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&season=" . $this->parameter;
    }
}
