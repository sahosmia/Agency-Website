<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasSlug;

class Category extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'title',
        'slug',
    ];

    public function getSlugSourceField(): string
    {
        return 'title';
    }
}
