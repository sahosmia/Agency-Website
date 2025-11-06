<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
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

    public function services()
    {
        return $this->morphedByMany(Service::class, 'technologable');
    }

    public function softwares()
    {
        return $this->morphedByMany(Software::class, 'technologable');
    }

    // image_url accessor
    protected $appends = ['image_url'];
    public function getImageUrlAttribute()
    {
        if ($this->image && file_exists(public_path('uploads/technologies/' . $this->image))) {
            return asset('uploads/technologies/' . $this->image);
        }
        return asset('images/default-technology-image.jpg');
    }
}
