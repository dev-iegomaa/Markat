<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminSliderInterface;
use App\Http\Traits\handleImage\ImageTrait;
use App\Http\Traits\slider\SliderTrait;
use App\Models\Slider;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSliderRepository implements AdminSliderInterface
{
    const PATH = 'slider';
    private $sliderModel;
    use SliderTrait, ImageTrait;
    public function __construct(Slider $slider)
    {
        $this->sliderModel = $slider;
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
        $imageName = $this->uploadImage($request->image, self::PATH);
        $this->sliderModel::create([
            'paragraph' => $request->paragraph,
            'image' => $imageName
        ]);
        Alert::toast('Slider Created Successfully', 'success');
        return redirect(route('admin.slider.index'));
    }

    public function delete($request): RedirectResponse
    {
        $slider = $this->findSliderById($request->id);
        public_path(unlink($slider->image));
        $slider->delete();
        Alert::toast('Slider Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $slider = $this->findSliderById($id);
        if ($slider) {
            return view('admin.slider.edit', compact('slider'));
        }
        Alert::toast('Slider Not Found', 'error');
        return redirect()->back()->withErrors(['Slider Not Found !']);
    }

    public function update($request)
    {
        $slider = $this->findSliderById($request->id);
        if ($request->image) {
            $imageName = $this->uploadImage($request->image, self::PATH, $slider->image);
        }
        $slider->update([
            'paragraph' => $request->paragraph,
            'image' => $imageName ?? $slider->getRawOriginal('image')
        ]);
        Alert::toast('Slider Updated Successfully', 'success');
        return redirect(route('admin.slider.index'));
    }
}
