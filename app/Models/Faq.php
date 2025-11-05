<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'is_active'];

    public function faqable(): MorphTo
    {
        return $this->morphTo();
    }
}
