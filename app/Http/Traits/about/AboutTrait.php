<?php

namespace App\Http\Traits\about;

trait AboutTrait
{

    private function getAllAboutsData()
    {
        return $this->aboutModel::select('id', 'paragraph', 'image')->get();
    }
    private function findAboutById($id)
    {
        return $this->aboutModel::select('id', 'paragraph', 'image')->find($id);
    }
}
