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
}
