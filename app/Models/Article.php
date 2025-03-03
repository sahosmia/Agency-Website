<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'thumbnail', 'short_text', 'long_text', 'article_category_id'];

    public function article_category()
    {
        return $this->belongsTo(ArticleCategory::class);
    }
}
