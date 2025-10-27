<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceFrontController extends Controller
{
    public function index(Request $request)
    {
        $service_categories = ServiceCategory::get();

        $services = Service::with('service_category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%'.$request->search.'%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('service_category_id', $request->category);
            })
            ->paginate(6);

        return view('frontend.services.index', ['services' => $services, 'service_categories' => $service_categories]);
    }

    public function show(Service $service)
    {
        $service->load('service_category', 'keyFeatures', 'technologies', 'serviceTypes.pricePlans.features');
        $services = Service::with('service_category')->limit(5)->get();

        return view('frontend.services.show', ['services' => $services, 'service' => $service]);
    }
}
