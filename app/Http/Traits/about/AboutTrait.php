<?php

namespace App\Http\Traits\about;

trait AboutTrait
{

    private function getAllAboutsData()
    {
        return $this->about::get();
    }
    private function findAboutById($id)
    {
        return $this->about::find($id);
    }
    private function uploadImage($file, $oldImage = null): string
    {
        $fileName = time() . '_about.' . $file->extension();

        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/about'),$fileName);
        return $fileName;
    }
}
