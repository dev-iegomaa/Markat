<?php

namespace App\Http\Traits\category;

trait CategoryTrait
{

    private function getAllCategoriesData()
    {
        return $this->categoryModel::select('id', 'image', 'title')->get();
    }
    private function findCategoryById($id)
    {
        return $this->categoryModel::select('id', 'image', 'title')->find($id);
    }
}
