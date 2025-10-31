<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory, HasImage;

    public $image_folder = 'technologies';

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
