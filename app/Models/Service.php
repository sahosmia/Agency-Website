<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'service_category_id',
        'description',
        'image',
    ];

    public function service_category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    public function serviceTypes()
    {
        return $this->hasMany(ServiceType::class);
    }

    public function technologies()
    {
        return $this->morphToMany(Technology::class, 'technologable');
    }

    public function keyFeatures()
    {
        return $this->morphToMany(KeyFeature::class, 'key_featureable');
    }
}
