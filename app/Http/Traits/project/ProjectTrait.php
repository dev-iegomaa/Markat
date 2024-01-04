<?php

namespace App\Http\Traits\project;

trait ProjectTrait
{

    private function getAllProjectsData()
    {
        return $this->project::get();
    }
    private function findProjectById($id)
    {
        return $this->project::find($id);
    }
    private function uploadImage($file, $oldImage = null): string
    {
        $fileName = time() . '_project.' . $file->extension();

        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/project'),$fileName);
        return $fileName;
    }
}
