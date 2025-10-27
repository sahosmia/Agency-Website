<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function services()
    {
        return $this->morphedByMany(Service::class, 'technologable');
    }

    public function softwares()
    {
        return $this->morphedByMany(Software::class, 'technologable');
    }
}
