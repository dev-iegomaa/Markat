<?php

namespace App\Http\Traits\slider;

trait SliderTrait
{
    private function getAllSlidersData()
    {
        return $this->sliderModel::select('id', 'paragraph', 'image')->get();
    }
    private function findSliderById($id)
    {
        return $this->sliderModel::select('id', 'paragraph', 'image')->find($id);
    }
}
