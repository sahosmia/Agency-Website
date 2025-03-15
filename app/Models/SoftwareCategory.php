<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description'];

    public function softwares()
    {
        return $this->hasMany(Software::class, 'software_category_id');
    }
}
