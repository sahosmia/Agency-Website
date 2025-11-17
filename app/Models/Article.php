<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Article extends Model
{
    use HasFactory, HasSlug, ScopeActive;

    protected $fillable = ['title', 'slug', 'short_text', 'long_text', 'category_id', 'thumbnail', 'is_active', 'meta_title', 'meta_description'];

protected $appends = ['thumbnail_url'];

public function getThumbnailUrlAttribute()
{
    $path = 'articles/' . $this->thumbnail;

    if ($this->thumbnail && Storage::disk('public')->exists($path)) {
        return Storage::url($path);  // returns /storage/articles/filename
    }

    return asset('images/default-thumbnail.jpg');
}


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
