<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'planable_id',
        'planable_type',
        'name',
        'price',
        'type',
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
