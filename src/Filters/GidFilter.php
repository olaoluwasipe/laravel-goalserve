<?php

namespace CodeBugLab\GoalServe\Filters;

class GidFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&gid=" . $this->parameter;
    }
}
