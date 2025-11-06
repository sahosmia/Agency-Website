<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['title', 'slug', 'type', 'location', 'end_date', 'benefits', 'responsibilities', 'requirements', 'skills_required', 'weekly_holidays', 'salary', 'others', 'vacancy_category_id', 'is_active'];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    protected $casts = [
        'benefits' => 'array',
        'responsibilities' => 'array',
        'requirements' => 'array',
        'skills_required' => 'array',
    ];

    public function vacancy_category()
    {
        return $this->belongsTo(VacancyCategory::class);
    }
}
