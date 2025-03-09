<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = ['title', 'slug', 'type', 'location', 'end_date', 'benefits', 'responsibilities', 'requirements', 'skills_required', 'weekly_holidays', 'salary', 'others', 'vacancy_category_id'];

    public function vacancy_category()
    {
        return $this->belongsTo(VacancyCategory::class);
    }
}
