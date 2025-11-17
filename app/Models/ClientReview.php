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
        'reviewable_id',
        'reviewable_type',
    ];

    public function reviewable()
    {
        return $this->morphTo();
    }

    // avatar_url accessor
 protected $appends = ['avatar_url'];

public function getAvatarUrlAttribute()
{
    $path = 'storage/client_reviews/' . $this->avatar;

    if ($this->avatar && file_exists(public_path($path))) {
        return asset($path);
    }

    return asset('images/default-client-avatar.jpg');
}

}
