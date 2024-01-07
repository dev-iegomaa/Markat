<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminSettingInterface;
use App\Http\Requests\admin\setting\DeleteSettingRequest;
use App\Http\Requests\admin\setting\CreateSettingRequest;
use App\Http\Requests\admin\setting\UpdateSettingRequest;

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

    public function delete(DeleteSettingRequest $request)
    {
        return $this->settingInterface->delete($request);
    }

    public function edit($id)
    {
        return $this->settingInterface->edit($id);
    }

    public function update(UpdateSettingRequest $request)
    {
        return $this->settingInterface->update($request);
    }
}
