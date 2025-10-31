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
        if ($this->logo && $this->fileExists('trusted_partners/' . $this->logo)) {
            return $this->getFileUrl('trusted_partners/' . $this->logo);
        }
        return asset('images/default-trusted-partner-logo.jpg');
    }
    
}
