<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminSettingInterface;
use App\Http\Services\SettingCheckImageService;
use App\Http\Services\SettingCreateService;
use App\Http\Services\SettingUpdateService;
use App\Models\Setting;

class AdminSettingRepository implements AdminSettingInterface
{
    private $settingModel;
    private $checkImage;
    private $createService;
    private $updateService;
    public function __construct(Setting $setting, SettingCheckImageService $service, SettingCreateService $createService, SettingUpdateService $updateService)
    {
        $this->settingModel = $setting;
        $this->checkImage = $service;
        $this->createService = $createService;
        $this->updateService = $updateService;
    }

    public function index()
    {
        $settings = $this->settingModel::get();
        return redirect(route('admin.setting.index', compact('settings')));
    }

    public function create()
    {
        return view('admin.setting.create');
    }

    public function insert($request)
    {
        $value = $this->createService->checkSettingCreateIsStringOrImage($request->type);
        $this->settingModel::create([
            'type' => $request->type,
            'value' => $value
        ]);
        return redirect(route('admin.setting.index'));
    }

    public function delete($request, $service)
    {
        $setting = $this->settingModel::find($request->id);
        (! $this->checkImage->checkSettingImageExistsOrNot($setting->value) ) ?: $service->deleteImageInLocal('uploaded/setting/' . $setting->value);
        $setting->delete();
        return redirect()->back();
    }

    public function edit($request)
    {
        $setting = $this->settingModel::find($request->id);
        return view('admin.setting.edit', compact('setting'));
    }

    public function update($request)
    {
        $setting = $this->settingModel::find($request->id);
        $value = $this->updateService->checkSettingUpdateTypeIsStringOrImage($request->type, $setting);
        $setting->update([
            'type' => $request->type,
            'value' => $value
        ]);
        return redirect(route('admin.setting.index'));
    }
}
