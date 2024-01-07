<?php

namespace App\Http\Traits\handleImage;

trait ImageTrait
{
    private function uploadImage($file, $path, $oldImage = null): string
    {
        $fileName = time() . "_$path." . $file->extension();

        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path("uploaded/$path"),$fileName);
        return $fileName;
    }
}
