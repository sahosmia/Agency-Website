<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'experience',
        'why_hire',
        'vacancy_id',
    ];

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
