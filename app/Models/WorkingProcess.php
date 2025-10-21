<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingProcess extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'icon'];
}
