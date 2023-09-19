<?php

namespace CodeBugLab\GoalServe\Filters;

class BookmakerFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&bm=" . $this->parameter;
    }
}
