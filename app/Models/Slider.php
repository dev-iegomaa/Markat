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

    public function getImageAttribute($value): string
    {
        return 'uploaded/slider/' . $value;
    }
}
