<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_name',
        'settings',
    ];

    protected $casts = [
        'settings' => 'array',
    ];
}
