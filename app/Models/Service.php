<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Service extends Model
{
    use HasFactory, HasSlug, ScopeActive;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'description',
        'image',
        'is_active',
        'meta_title',
        'meta_description',
    ];

    // image_url accessor
    protected $appends = ['image_url', 'thumbnail_url'];
    public function getImageUrlAttribute()
    {
        $path = 'storage/services/images/' . $this->image;

        if ($this->image && file_exists(public_path($path))) {
            return asset($path);
        }

        return asset('images/default/service.webp');
    }
    public function getThumbnailUrlAttribute()
    {
        $path = 'storage/services/thumbnails/' . $this->thumbnail;

        if ($this->thumbnail && file_exists(public_path($path))) {
            return asset($path);
        }

        return asset('images/default/service_thumbnail.webp');
    }

    public function getSlugSourceField(): string
    {
        return 'name';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function serviceTypes()
    {
        return $this->hasMany(ServiceType::class);
    }

    public function technologies()
    {
        return $this->morphToMany(Technology::class, 'technologable');
    }

    public function keyFeatures()
    {
        return $this->morphToMany(KeyFeature::class, 'key_featureable');
    }

    public function faqs(): MorphMany
    {
        return $this->morphMany(Faq::class, 'faqable');
    }
}
