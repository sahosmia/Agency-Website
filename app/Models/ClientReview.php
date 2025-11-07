<?php

namespace App\Models;

use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    use HasFactory, ScopeActive;

    protected $fillable = [
        'name',
        'designation',
        'avatar',
        'rating',
        'review',
        'is_active',
        'sort',
    ];

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
