<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Article extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['title', 'slug', 'short_text', 'long_text', 'article_category_id', 'thumbnail', 'is_active', 'meta_title', 'meta_description'];
    protected $appends = ['thumbnail_url'];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail && Storage::disk('public')->exists('articles/' . $this->thumbnail)) {
            return Storage::url('articles/' . $this->thumbnail);
        }
        // TODO: update default thumbnail image path with add default image
        return asset('images/default-thumbnail.jpg');
    }


    public function article_category()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
