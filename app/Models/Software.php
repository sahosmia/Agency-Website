<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $table = 'softwares';

    protected $fillable = [
        'name',
        'slug',
        'software_category_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(SoftwareCategory::class, 'software_category_id');
    }
}
