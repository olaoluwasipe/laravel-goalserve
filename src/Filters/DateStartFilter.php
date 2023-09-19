<?php

namespace CodeBugLab\GoalServe\Filters;

class DateStartFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&date_start=" . $this->parameter;
    }
}
