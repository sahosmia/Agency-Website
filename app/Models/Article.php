<?php

namespace App\Models;

use App\Traits\HasImage;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, HasSlug, HasImage;

    public $image_folder = 'articles';

    protected $fillable = ['title', 'slug', 'short_text', 'long_text', 'article_category_id', 'thumbnail'];
    protected $appends = ['image_url'];

    public function article_category()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
