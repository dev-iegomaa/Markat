<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProvideService extends Model
{
    use HasFactory;
    protected $fillable = [
        'provide_id',
        'service_id'
    ];

    public static function provideServiceRule(): array
    {
        return [
            'provide_id' => 'required|integer|exists:provides,id',
            'services_id' => 'required|array'
        ];
    }

    public function provides(): BelongsToMany
    {
        return $this->belongsToMany(Provide::class, 'provide_services', 'id', 'provide_id');
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'provide_services', 'id', 'service_id');
    }
}
