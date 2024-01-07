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

    public function getImageAttribute($value): string
    {
        return 'uploaded/project/'. $value;
    }
}
