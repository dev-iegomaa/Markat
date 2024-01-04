<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Provide extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'paragraph',
        'image',
        'services',
        'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public static function provideRules(): array
    {
        return [
            'title' => 'required|string',
            'paragraph' => 'required|string',
            'image' => 'required|file',
            'services' => 'required|array',
            'category_id' => 'required|string'
        ];
    }
}
