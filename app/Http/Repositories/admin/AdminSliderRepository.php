<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminSliderInterface;
use App\Http\Traits\slider\SliderTrait;
use App\Models\Slider;

class AdminSliderRepository implements AdminSliderInterface
{
    private $slider;
    use SliderTrait;
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        $sliders = $this->getAllSlidersData();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function insert($request)
    {
        $imageName = $this->uploadImage($request->image);
        $this->slider::create([
            'paragraph' => $request->paragraph,
            'image' => $imageName
        ]);
        return redirect(route('admin.slider.index'));
    }

    public function delete($request)
    {
        $slider = $this->findSliderById($request->id);
        public_path(unlink($slider->image));
        $slider->delete();
        return redirect()->back();
    }

    public function edit($request)
    {
        $slider = $this->findSliderById($request->id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update($request)
    {
        $slider = $this->findSliderById($request->id);
        $imageName = $this->uploadImage($request->image, $slider->image);
        $slider->update([
            'paragraph' => $request->paragraph,
            'image' => $imageName
        ]);
        return redirect(route('admin.slider.index'));
    }
}
