<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title'
    ];

    public static function projectRules(): array
    {
        return [
            'image' => 'required|file|mimes:png,jpg,webp,jpeg',
            'title' => 'required|string'
        ];
    }

    public function getImageAttribute($value): string
    {
        return 'uploaded/project/'. $value;
    }
}
