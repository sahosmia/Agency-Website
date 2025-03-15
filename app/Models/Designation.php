<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description'];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
