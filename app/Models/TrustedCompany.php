<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustedCompany extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo'];

    // logo_url accessor
    protected $appends = ['logo_url'];
    public function getLogoUrlAttribute()
    {
        if ($this->logo && file_exists(public_path('uploads/trusted_companies/' . $this->logo))) {
            return asset('uploads/trusted_companies/' . $this->logo);
        }
        return asset('images/default-trusted-company-logo.jpg');
    }

}
