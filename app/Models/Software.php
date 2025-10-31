<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory, HasSlug;

    protected $table = 'softwares';

    protected $fillable = [
        'name',
        'slug',
        'software_category_id',
        'image',
    ];

    // image_url accessor
    protected $appends = ['image_url'];
    public function getImageUrlAttribute()
    {
        if ($this->image && file_exists(public_path('uploads/softwares/' . $this->image))) {
            return asset('uploads/softwares/' . $this->image);
        }
        return asset('images/default-software-image.jpg');
    }

    public function getSlugSourceField(): string
    {
        return 'name';
    }

    public function software_category()
    {
        return $this->belongsTo(SoftwareCategory::class, 'software_category_id');
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
}
