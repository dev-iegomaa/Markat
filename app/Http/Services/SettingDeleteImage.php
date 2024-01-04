<?php

namespace App\Http\Services;

class SettingDeleteImage
{
    public function deleteImageInLocal($image)
    {
        unlink(public_path($image));
    }
}
