<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'name',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function pricePlans()
    {
        return $this->morphMany(PricePlan::class, 'planable');
    }
}
