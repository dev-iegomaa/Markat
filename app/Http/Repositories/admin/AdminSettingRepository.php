<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminSettingInterface;
use App\Http\Services\SettingCheckImageService;
use App\Http\Services\SettingCreateService;
use App\Http\Services\SettingUpdateService;
use App\Http\Traits\handleImage\ImageTrait;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSettingRepository implements AdminSettingInterface
{
    const PATH = 'setting';
    private $settingModel;
    use ImageTrait;
    public function __construct(Setting $setting)
    {
        $this->settingModel = $setting;
    }

    public function index()
    {
        $settings = $this->settingModel::get();
        return view('admin.setting.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.setting.create');
    }

    public function insert($request)
    {
        $logo = $this->uploadImage($request->logo, self::PATH);
        $this->settingModel::create([
            'title' => $request->title,
            'email' => $request->email,
            'logo' => $logo,
            'phone' => $request->phone,
            'tracking_apis' => $request->tracking_apis
        ]);
        Alert::toast('Setting Created Successfully', 'success');
        return redirect(route('admin.setting.index'));
    }

    public function delete($request): RedirectResponse
    {
        $setting = $this->settingModel::find($request->id);
        public_path(unlink($setting->logo));
        $setting->delete();
        Alert::toast('Setting Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $setting = $this->settingModel::find($id);
        if ($setting) {
            return view('admin.setting.edit', compact('setting'));
        }
        Alert::toast('Setting Not Found', 'error');
        return redirect()->back();
    }

    public function update($request)
    {
        $setting = $this->settingModel::find($request->id);
        if ($request->image) {
            $logo = $this->uploadImage($request->logo, self::PATH);
        }

        $setting->update([
            'title' => $setting->title ?? $request->title,
            'email' => $setting->email ?? $request->email,
            'logo' => $logo ?? $setting->getRawOriginal('logo'),
            'phone' => $setting->phone ?? $request->phone,
            'tracking_apis' => $setting->tracking_apis ?? $request->tracking_apis
        ]);
        Alert::toast('Setting Updated Successfully', 'success');
        return redirect(route('admin.setting.index'));
    }
}
