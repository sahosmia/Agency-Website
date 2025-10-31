<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyCategory extends Model
{
    use HasFactory, HasSlug;

    protected $table = 'vacancy_categories';

    protected $fillable = ['title', 'slug'];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'vacancy_category_id');
    }
}
