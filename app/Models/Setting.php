<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'value'
    ];

    public static function settingRules(): array
    {
        return [
            'type' => 'required|string',
            'value' => 'required|string'
        ];
    }
}
