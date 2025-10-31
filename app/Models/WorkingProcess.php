<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingProcess extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'icon'];

    // icon_url accessor
    protected $appends = ['icon_url'];
    public function getIconUrlAttribute()
    {
        if ($this->icon && file_exists(public_path('uploads/working_processes/' . $this->icon))) {
            return asset('uploads/working_processes/' . $this->icon);
        }
        return asset('images/default-working-process-icon.jpg');
    }
}
