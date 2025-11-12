<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use App\Models\Software;
use App\Models\Category;
use App\Models\Faq;
use Illuminate\Http\Request;

class SoftwareFrontController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();

        $softwares = Software::with('category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%'.$request->search.'%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })
            ->paginate(6);

        $softwaresPage = PageSetting::where('page_name', 'softwares')->first();
        $softwaresSettings = $softwaresPage ? $softwaresPage->settings : [];
            $faqs = Faq::where('page', 'software')->orderBy('sort')->get();
        return view('frontend.softwares.index', ['softwares' => $softwares, 'categories' => $categories, 'softwaresSettings' => $softwaresSettings, 'faqs' => $faqs]);
    }

    public function show(Software $software)
    {
        $software->load('category', 'keyFeatures', 'technologies', 'pricePlans.features');
        $softwares = Software::with('category')->limit(5)->get();
        $groupedPricePlans = $software->pricePlans->groupBy('type');
        $softwareDetailPage = PageSetting::where('page_name', 'software-detail')->first();
        $softwareDetailSettings = $softwareDetailPage ? $softwareDetailPage->settings : [];

        return view('frontend.softwares.show', ['softwares' => $softwares, 'software' => $software, 'groupedPricePlans' => $groupedPricePlans, 'softwareDetailSettings' => $softwareDetailSettings]);
    }
}
