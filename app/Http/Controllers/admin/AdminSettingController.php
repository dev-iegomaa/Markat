<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminSettingInterface;
use App\Http\Requests\admin\setting\CheckIdSettingRequest;
use App\Http\Requests\admin\setting\CreateSettingRequest;
use App\Http\Requests\admin\setting\UpdateSettingRequest;
use App\Http\Services\SettingDeleteImage;

class AdminSettingController extends Controller
{
    private $settingInterface;
    public function __construct(AdminSettingInterface $interface)
    {
        $this->settingInterface = $interface;
    }

    public function index()
    {
        return $this->settingInterface->index();
    }

    public function create()
    {
        return $this->settingInterface->create();
    }

    public function insert(CreateSettingRequest $request)
    {
        return $this->settingInterface->insert($request);
    }

    public function delete(CheckIdSettingRequest $request, SettingDeleteImage $service)
    {
        return $this->settingInterface->delete($request, $service);
    }

    public function edit(CheckIdSettingRequest $request)
    {
        return $this->settingInterface->edit($request);
    }

    public function update(UpdateSettingRequest $request)
    {
        return $this->settingInterface->update($request);
    }
}
