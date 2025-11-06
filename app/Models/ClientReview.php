<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'avatar',
        'rating',
        'review',
        'is_active',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    // avatar_url accessor
    protected $appends = ['avatar_url'];
    public function getAvatarUrlAttribute()
    {
        if ($this->avatar && file_exists(public_path('uploads/client_reviews/' . $this->avatar))) {
            return asset('uploads/client_reviews/' . $this->avatar);
        }
        return asset('images/default-client-avatar.jpg');
    }
}
