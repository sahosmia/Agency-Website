<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'image', 'is_active'];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    // image_utl accessor
    protected $appends = ['image_url'];
    public function getImageUrlAttribute()
    {
        if ($this->image && file_exists(public_path('uploads/clients/' . $this->image))) {
            return asset('uploads/clients/' . $this->image);
        }
        return asset('images/default-client-image.jpg');
    }
}
