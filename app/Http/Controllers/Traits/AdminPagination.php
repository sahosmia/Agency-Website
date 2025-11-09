<?php

namespace App\Http\Controllers\Traits;

use App\Models\PageSetting;

trait AdminPagination
{
    public function getAdminPagination()
    {
        $commonSettings = PageSetting::where('page_name', 'common_setting')->first();
        return $commonSettings ? ($commonSettings->settings['admin_pagination'] ?? 10) : 10;
    }
}
