<?php

namespace App\Models;

use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustedPartner extends Model
{
    use HasFactory, FileUploadTrait;

    protected $fillable = ['name', 'logo'];
}
