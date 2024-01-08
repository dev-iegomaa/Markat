<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\HomeInterface;
use App\Models\About;
use App\Models\Setting;
use App\Models\Slider;

class HomeRepository implements HomeInterface
{
    public function index()
    {
        $slider = Slider::select('id', 'image', 'paragraph')->first();
        $setting = Setting::select('id', 'email', 'logo', 'phone', 'title', 'tracking_apis')->first();
        $about = About::select('id', 'image', 'paragraph')->first();
        return view('endUser/home', compact('slider', 'setting', 'about'));
    }
}
