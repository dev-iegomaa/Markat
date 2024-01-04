<?php

namespace App\Http\Traits\category;

trait CategoryTrait
{

    private function getAllCategoriesData()
    {
        return $this->category::get();
    }
    private function findCategoryById($id)
    {
        return $this->category::find($id);
    }
    private function uploadImage($file, $oldImage = null): string
    {
        $fileName = time() . '_category.' . $file->extension();

        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/category'),$fileName);
        return $fileName;
    }
}
