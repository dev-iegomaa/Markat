<?php

namespace App\Http\Traits\project;

trait ProjectTrait
{

    private function getAllProjectsData()
    {
        return $this->projectModel::select('id', 'image', 'title')->get();
    }
    private function findProjectById($id)
    {
        return $this->projectModel::select('id', 'image', 'title')->find($id);
    }
}
