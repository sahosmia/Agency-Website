<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PricePlanRequest;
use App\Models\PricePlan;
use App\Models\ServiceType;
use App\Models\Software;
use App\Models\Feature;
use Illuminate\Http\Request;
use App\Services\PricePlanService;

class PricePlanController extends Controller
{
    protected $pricePlanService;

    public function __construct(PricePlanService $pricePlanService)
    {
        $this->pricePlanService = $pricePlanService;
    }

    public function index(Request $request)
    {
        $pricePlans = $this->pricePlanService->getPricePlans($request->all(), 10);
        return view('admin.price-plans.index', compact('pricePlans'));
    }

    public function create()
    {
        $serviceTypes = ServiceType::all();
        $softwares = Software::all();
        $features = Feature::all();
        return view('admin.price-plans.create', compact('serviceTypes', 'softwares', 'features'));
    }

    public function store(PricePlanRequest $request)
    {
        $data = $request->validated();
        if ($request->type === 'free' || $request->type === 'custom') {
            $data['price'] = null;
        }
        $data['features'] = $request->features;

        $this->pricePlanService->storePricePlan($data);

        return redirect()->route('admin.price-plans.index')->with('success', 'Price Plan created successfully.');
    }

    public function edit(PricePlan $pricePlan)
    {
        $serviceTypes = ServiceType::all();
        $softwares = Software::all();
        $features = Feature::all();
        return view('admin.price-plans.edit', compact('pricePlan', 'serviceTypes', 'softwares', 'features'));
    }

    public function update(PricePlanRequest $request, PricePlan $pricePlan)
    {
        $data = $request->validated();
        if ($request->type === 'free' || $request->type === 'custom') {
            $data['price'] = null;
        }
        $data['features'] = $request->features;

        $this->pricePlanService->updatePricePlan($pricePlan, $data);

        return redirect()->route('admin.price-plans.index')->with('success', 'Price Plan updated successfully.');
    }

    public function destroy(PricePlan $pricePlan)
    {
        $this->pricePlanService->deletePricePlan($pricePlan);
        return redirect()->route('admin.price-plans.index')->with('success', 'Price Plan deleted successfully.');
    }
}
