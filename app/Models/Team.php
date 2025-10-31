<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'avatar', 'designation_id'];

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
