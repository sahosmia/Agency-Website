<?php

namespace App\Models;

use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustedPartner extends Model
{
    use HasFactory, FileUploadTrait;

    protected $fillable = ['name', 'logo'];
   protected $appends = ['logo_url'];
    public function getLogoUrlAttribute()
    {
        if ($this->icon && file_exists(public_path('uploads/trusted_companies/' . $this->icon))) {
            return asset('uploads/trusted_companies/' . $this->icon);
        }
        return asset('images/default-trusted-company-logo.jpg');
    }


}
