<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait HasImage
{
    public function getImageUrlAttribute()
    {
        $imageAttribute = $this->image ?? $this->thumbnail;
        $folder = $this->image_folder ?? '';

        if ($imageAttribute && Storage::disk('public')->exists($folder . '/' . $imageAttribute)) {
            return Storage::url($folder . '/' . $imageAttribute);
        }

        return asset('frontend/images/default-thumbnail.jpg');
    }
}
