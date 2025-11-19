<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustedCompany extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image'];

    // image_url accessor
    protected $appends = ['image_url'];
    public function getImageUrlAttribute()
    {
        return asset('storage/trusted_companies/' . $this->image);
    }

}
