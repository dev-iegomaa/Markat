<?php

namespace App\Http\Traits\skill;

trait SkillTrait
{
    private function getAllSkillsData()
    {
        return $this->skillModel::select('id', 'skill', 'progress')->get();
    }

    private function findSkillById($id)
    {
        return $this->skillModel::select('id', 'skill', 'progress')->find($id);
    }
}
