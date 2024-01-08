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
        'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getImageAttribute($value): string
    {
        return 'uploaded/provide/' . $value;
    }

}
