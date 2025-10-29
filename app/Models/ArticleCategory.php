<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['title', 'slug', 'description'];

    public function articles()
    {
        return $this->hasMany(Article::class, 'article_category_id');
    }
}
