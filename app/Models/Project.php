<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

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
    ];

    protected $casts = [
        'screenshots' => 'array',
        'images' => 'array',
        'thumbnails' => 'array',
    ];

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
}
