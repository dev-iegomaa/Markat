<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'paragraph',
        'image'
    ];

    public static function sliderRules(): array
    {
        return [
            'image' => 'required|file',
            'paragraph' => 'required|string'
        ];
    }

    public function getImageAttribute($value): string
    {
        return 'uploaded/slider/' . $value;
    }
}
