<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use App\Models\Software;
use App\Models\SoftwareCategory;
use Illuminate\Http\Request;

class SoftwareFrontController extends Controller
{
    public function index(Request $request)
    {
        $software_categories = SoftwareCategory::get();

        $softwares = Software::with('software_category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%'.$request->search.'%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('software_category_id', $request->category);
            })
            ->paginate(6);

        $softwaresPage = PageSetting::where('page_name', 'softwares')->first();
        $softwaresSettings = $softwaresPage ? $softwaresPage->settings : [];

        return view('frontend.softwares.index', ['softwares' => $softwares, 'software_categories' => $software_categories, 'softwaresSettings' => $softwaresSettings]);
    }

    public function show(Software $software)
    {
        $software->load('software_category', 'keyFeatures', 'technologies', 'pricePlans.features');
        $softwares = Software::with('software_category')->limit(5)->get();
        $groupedPricePlans = $software->pricePlans->groupBy('type');
        $softwareDetailPage = PageSetting::where('page_name', 'software-detail')->first();
        $softwareDetailSettings = $softwareDetailPage ? $softwareDetailPage->settings : [];

        return view('frontend.softwares.show', ['softwares' => $softwares, 'software' => $software, 'groupedPricePlans' => $groupedPricePlans, 'softwareDetailSettings' => $softwareDetailSettings]);
    }
}
