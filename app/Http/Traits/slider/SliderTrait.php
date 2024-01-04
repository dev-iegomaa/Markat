<?php

namespace App\Http\Traits\slider;

trait SliderTrait
{
    private function getAllSlidersData()
    {
        return $this->slider::get();
    }
    private function findSliderById($id)
    {
        return $this->slider::find($id);
    }
    private function uploadImage($file, $oldImage = null): string
    {
        $fileName = time() . '_slider.' . $file->extension();

        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/slider'),$fileName);
        return $fileName;
    }
}
