<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Project extends Model
{
    use HasFactory, HasSlug, ScopeActive;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'live_preview_link',
        'short_text',
        'project_overview',
        'problem',
        'challenge',
        'workflow_scenario',
        'solutions',
        'screenshots',
        'images',
        'thumbnails',
        'project_category_id',
        'client_review_id',
        'is_active',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'screenshots' => 'array',
        'images' => 'array',
        'thumbnails' => 'array',
    ];

    // thumbnail_url accessor
    protected $appends = ['thumbnail_url', 'screenshots_urls', 'images_urls', 'thumbnails_urls'];
    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail && file_exists(public_path('uploads/projects/' . $this->thumbnail))) {
            return asset('uploads/projects/' . $this->thumbnail);
        }
        return asset('images/default-project-thumbnail.jpg');
    }

    public function getScreenshotsUrlsAttribute()
    {
        $urls = [];
        if (is_array($this->screenshots)) {
            foreach ($this->screenshots as $screenshot) {
                if (file_exists(public_path('uploads/projects/' . $screenshot))) {
                    $urls[] = asset('uploads/projects/' . $screenshot);
                }
            }
        }
        return $urls;
    }

    public function getImagesUrlsAttribute()
    {
        $urls = [];
        if (is_array($this->images)) {
            foreach ($this->images as $image) {
                if (file_exists(public_path('uploads/projects/' . $image))) {
                    $urls[] = asset('uploads/projects/' . $image);
                }
            }
        }
        return $urls;
    }

    public function getThumbnailsUrlsAttribute()
    {
        $urls = [];
        if (is_array($this->thumbnails)) {
            foreach ($this->thumbnails as $thumbnail) {
                if (file_exists(public_path('uploads/projects/' . $thumbnail))) {
                    $urls[] = asset('uploads/projects/' . $thumbnail);
                }
            }
        }
        return $urls;
    }

    

    // Relationship with ProjectCategory
    public function project_category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }

    // Relationship with ClientReview
    public function clientReview()
    {
        return $this->belongsTo(ClientReview::class, 'client_review_id');
    }

    public function faqs(): MorphMany
    {
        return $this->morphMany(Faq::class, 'faqable');
    }
}
