<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Reviewer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rating',
        'image',
    ];

    // append image_url attribute
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return asset('storage/reviewers/' . $this->image);
    }
}
