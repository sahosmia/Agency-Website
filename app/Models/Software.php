<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory, HasSlug, ScopeActive;

    protected $table = 'softwares';

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'image',
        'sort_description',
        'is_active',
        'meta_title',
        'meta_description',
    ];

    // image_url accessor
    protected $appends = ['image_url'];
    public function getImageUrlAttribute()
    {
        $path = 'storage/softwares/' . $this->image;

        if ($this->image && file_exists(public_path($path))) {
            return asset($path);
        }

        return asset('images/default/service.webp');
    }

    public function getSlugSourceField(): string
    {
        return 'name';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function pricePlans()
    {
        return $this->morphMany(PricePlan::class, 'planable');
    }

    public function technologies()
    {
        return $this->morphToMany(Technology::class, 'technologable');
    }

    public function keyFeatures()
    {
        return $this->morphToMany(KeyFeature::class, 'key_featureable');
    }

    public function faqs()
    {
        return $this->morphMany(Faq::class, 'faqable');
    }
}
