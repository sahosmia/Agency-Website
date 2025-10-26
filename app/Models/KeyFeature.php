<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    /**
     * Get all of the services that are assigned this key feature.
     */
    public function services()
    {
        return $this->morphedByMany(Service::class, 'key_featureable');
    }

    /**
     * Get all of the softwares that are assigned this key feature.
     */
    public function softwares()
    {
        return $this->morphedByMany(Software::class, 'key_featureable');
    }
}
