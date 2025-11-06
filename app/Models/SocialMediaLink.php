<?php

namespace App\Models;

use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaLink extends Model
{
    use HasFactory, ScopeActive;

    protected $fillable = ['name', 'url', 'icon', 'is_active'];

    // icon_url accessor
    protected $appends = ['icon_url'];
    public function getIconUrlAttribute()
    {
        if ($this->icon && file_exists(public_path('uploads/social_media_links/' . $this->icon))) {
            return asset('uploads/social_media_links/' . $this->icon);
        }
        return asset('images/default-social-media-icon.jpg');
    }
}
