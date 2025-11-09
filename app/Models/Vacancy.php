<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory, HasSlug, ScopeActive;

    protected $fillable = ['title', 'slug', 'type', 'location', 'end_date', 'benefits', 'responsibilities', 'requirements', 'skills_required', 'weekly_holidays', 'salary', 'others', 'category_id', 'is_active'];

    protected $casts = [
        'benefits' => 'array',
        'responsibilities' => 'array',
        'requirements' => 'array',
        'skills_required' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
