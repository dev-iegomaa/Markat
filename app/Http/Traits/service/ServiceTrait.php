<?php

namespace App\Http\Traits\service;

trait ServiceTrait
{
    private function getAllServices()
    {
        return $this->serviceModel::select('id', 'service')->get();
    }

    private function findServiceById($id)
    {
        return $this->serviceModel::select('id', 'service')->find($id);
    }
}
