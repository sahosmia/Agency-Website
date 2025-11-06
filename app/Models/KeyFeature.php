<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'is_active',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    // image_url accessor
    protected $appends = ['image_url'];
    public function getImageUrlAttribute()
    {
        if ($this->image && file_exists(public_path('uploads/key_features/' . $this->image))) {
            return asset('uploads/key_features/' . $this->image);
        }
        return asset('images/default-key-feature-image.jpg');
    }

    /**
     * Get all of the services that are assigned this key feature.
     */
    public function services()
    {
        return $this->morphedByMany(Service::class, 'key_featureable');
    }

    /**
     * Get all of the softwares that are assigned this key feature.
     */
    public function softwares()
    {
        return $this->morphedByMany(Software::class, 'key_featureable');
    }
}
