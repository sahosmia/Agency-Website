<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyCategory extends Model
{
    use HasFactory;

    protected $table = 'vacancy_categories';

    protected $fillable = ['title', 'slug', 'description'];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'vacancy_category_id');
    }
}
