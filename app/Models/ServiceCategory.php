<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['title', 'slug', 'description'];

    public function services()
    {
        return $this->hasMany(Service::class, 'service_category_id');
    }
}
