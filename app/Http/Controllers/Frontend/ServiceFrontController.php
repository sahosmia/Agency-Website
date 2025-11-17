<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use App\Models\Service;
use App\Models\Category;
use App\Models\Faq;
use Illuminate\Http\Request;

class ServiceFrontController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();

        $services = Service::active()->with('category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%'.$request->search.'%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })
            ->paginate(20);

        $servicesPage = PageSetting::where('page_name', 'services')->first();
        $servicesSettings = $servicesPage ? $servicesPage->settings : [];


        $faqs = Faq::where('page', 'service')->orderBy('sort')->get();

        return view('frontend.services.index', ['services' => $services, 'categories' => $categories, 'servicesSettings' => $servicesSettings, 'faqs' => $faqs]);


    }

    public function show(Service $service)
    {
        $service->load('category', 'keyFeatures', 'technologies', 'serviceTypes.pricePlans.features', 'faqs');
        $services = Service::active()->with('category')->limit(5)->get();
        $serviceDetailPage = PageSetting::where('page_name', 'service-detail')->first();
        $serviceDetailSettings = $serviceDetailPage ? $serviceDetailPage->settings : [];

        return view('frontend.services.show', ['services' => $services, 'service' => $service, 'serviceDetailSettings' => $serviceDetailSettings]);
    }
}
