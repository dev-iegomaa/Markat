<?php

namespace App\Http\Services;

class SettingCreateService
{
    private $service;
    public function __construct(SettingUploadImageService $service)
    {
        $this->service = $service;
    }

    public function checkSettingCreateIsStringOrImage($type)
    {
        return ($type != 'logo') ? request('value') : $this->service->uploadImage(request('image'));
    }
}
