<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service'
    ];

    public static function serviceRules(): array
    {
        return [
            'service' => 'required|string|unique:services,service,' . request('id')
        ];
    }
}
