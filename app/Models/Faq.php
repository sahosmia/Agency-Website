<?php

namespace App\Models;

use App\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Faq extends Model
{
    use HasFactory, ScopeActive;

    protected $fillable = ['question', 'answer', 'is_active', 'sort', 'page'];

    public function faqable(): MorphTo
    {
        return $this->morphTo();
    }
}
