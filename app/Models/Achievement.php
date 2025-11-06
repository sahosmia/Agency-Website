<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = ['is_active'];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
