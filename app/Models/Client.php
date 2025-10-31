<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory, HasImage;

    public $image_folder = 'clients';

    protected $fillable = ['name', 'location', 'image'];
}
