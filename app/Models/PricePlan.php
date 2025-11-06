<?php

namespace App\Models;

use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    use HasFactory, ScopeActive;

    protected $fillable = [
        'planable_id',
        'planable_type',
        'name',
        'price',
        'type',
        'features',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function planable()
    {
        return $this->morphTo();
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class)->withPivot('is_active');
    }
}
