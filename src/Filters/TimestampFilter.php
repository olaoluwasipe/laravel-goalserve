<?php

namespace CodeBugLab\GoalServe\Filters;

class TimestampFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&ts=" . $this->parameter;
    }
}
