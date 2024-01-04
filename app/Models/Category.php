<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title'
    ];

    public static function categoryRules(): array
    {
        return [
            'image' => 'required|file',
            'title' => 'required|string'
        ];
    }

    public function getImageAttribute($value): string
    {
        return 'uploaded/category/'. $value;
    }
}
