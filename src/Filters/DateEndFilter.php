<?php

namespace CodeBugLab\GoalServe\Filters;

class DateEndFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&date_end=" . $this->parameter;
    }
}
