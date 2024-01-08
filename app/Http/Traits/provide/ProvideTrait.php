<?php

namespace App\Http\Traits\provide;

trait ProvideTrait
{
    private function getAllProvidesData()
    {
        return $this->provideModel::with('category:id,title')->select('id', 'title', 'paragraph', 'image', 'category_id')->get();
    }

    private function findProvideById($id)
    {
        return $this->provideModel::select('id', 'title', 'paragraph', 'image', 'category_id')->find($id);
    }
}
