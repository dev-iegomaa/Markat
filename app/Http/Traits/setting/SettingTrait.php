<?php

namespace App\Http\Traits\setting;

trait SettingTrait
{
    private function getAllSettingData()
    {
        return $this->settingModel::select('id', 'email', 'logo', 'phone', 'title', 'tracking_apis')->get();
    }

    private function findSettingById($id)
    {
        return $this->settingModel::select('id', 'email', 'logo', 'phone', 'title', 'tracking_apis')->find($id);
    }
}
