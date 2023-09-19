<?php

namespace CodeBugLab\GoalServe\Filters;

class CatFilter extends ApiFilter
{
    public function getUrl(): string
    {
        return $this->ApiGenerator->getUrl() . "&cat=" . $this->parameter;
    }
}
