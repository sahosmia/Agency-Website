<?php

namespace App\Models;

use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory, ScopeActive;

    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];

    public function pricePlans()
    {
        return $this->belongsToMany(PricePlan::class)->withPivot('is_active');
    }
}
