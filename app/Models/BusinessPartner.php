<?php

namespace App\Models;

use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPartner extends Model
{
    use HasFactory, FileUploadTrait;

    protected $fillable = ['name', 'logo'];

    protected $appends = ['logo_url'];

    public function getLogoUrlAttribute()
    {
        if ($this->logo && $this->fileExists('business_partners/' . $this->logo)) {
            return $this->getFileUrl('business_partners/' . $this->logo);
        }
        return asset('images/default-business-partnerlogo.jpg');
    }
}
