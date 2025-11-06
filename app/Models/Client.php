<?php

namespace App\Models;

use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory, ScopeActive;

    protected $fillable = ['name', 'location', 'image', 'is_active'];

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
