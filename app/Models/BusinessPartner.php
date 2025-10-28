<?php

namespace App\Models;

use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPartner extends Model
{
    use HasFactory, FileUploadTrait;

    protected $fillable = ['name', 'logo'];
}
