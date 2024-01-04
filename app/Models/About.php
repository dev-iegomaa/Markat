<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'paragraph',
        'image'
    ];

    public static function aboutRules(): array
    {
        return [
            'paragraph' => 'required|string',
            'image' => 'required|file|mimes:png,jpg,webp,jpeg'
        ];
    }

    public function getImageAttribute($value): string
    {
        return 'uploaded/about/' . $value;
    }
}
