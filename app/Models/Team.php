<?php

namespace App\Models;

use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory, ScopeActive;

    protected $fillable = ['name', 'slug', 'avatar', 'designation_id', 'is_active'];

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
    // avatar_url accessor
    protected $appends = ['avatar_url'];
    public function getAvatarUrlAttribute()
    {
        if ($this->avatar && file_exists(public_path('uploads/teams/' . $this->avatar))) {
            return asset('uploads/teams/' . $this->avatar);
        }
        return asset('images/default-team-avatar.jpg');
    }
}
