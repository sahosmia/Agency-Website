<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustedPartner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo'];
    protected $appends = ['logo_url'];

    public function getLogoUrlAttribute()
    {
        if ($this->logo && file_exists(public_path('uploads/trusted_partners/' . $this->logo))) {
            return asset('uploads/trusted_partners/' . $this->logo);
        }
        return asset('images/default-trusted-company-logo.jpg');
    }
}
