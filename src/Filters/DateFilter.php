<?php

namespace CodeBugLab\GoalServe\Filters;

class DateFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&date=" . $this->parameter;
    }
}
