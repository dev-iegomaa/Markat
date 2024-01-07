<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'email',
        'logo',
        'phone',
        'tracking_apis'
    ];

    public function getLogoAttribute($value): string
    {
        return 'uploaded/setting/' . $value;
    }
}
