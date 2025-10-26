<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricePlan;
use App\Models\ServiceType;
use App\Models\Software;
use App\Models\Feature;
use Illuminate\Http\Request;

class PricePlanController extends Controller
{
    public function index()
    {
        $pricePlans = PricePlan::with('planable')->get();
        return view('admin.price-plans.index', compact('pricePlans'));
    }

    public function create()
    {
        $serviceTypes = ServiceType::all();
        $softwares = Software::all();
        $features = Feature::all();
        return view('admin.price-plans.create', compact('serviceTypes', 'softwares', 'features'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required_if:type,fixed|nullable|numeric',
            'type' => 'required|string|in:fixed,free,custom',
            'planable_id' => 'required',
            'planable_type' => 'required|string',
        ]);

        $data = $request->except('features');

        if ($request->type === 'free' || $request->type === 'custom') {
            $data['price'] = null;
        }

        $pricePlan = PricePlan::create($data);

        if ($request->has('features')) {
            $features = [];
            foreach ($request->features as $featureId => $featureData) {
                if (isset($featureData['id'])) {
                    $features[$featureId] = ['is_active' => $featureData['is_active']];
                }
            }
            $pricePlan->features()->sync($features);
        }

        return redirect()->route('admin.price-plans.index')->with('success', 'Price Plan created successfully.');
    }

    public function edit(PricePlan $pricePlan)
    {
        $serviceTypes = ServiceType::all();
        $softwares = Software::all();
        $features = Feature::all();
        return view('admin.price-plans.edit', compact('pricePlan', 'serviceTypes', 'softwares', 'features'));
    }

    public function update(Request $request, PricePlan $pricePlan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required_if:type,fixed|nullable|numeric',
            'type' => 'required|string|in:fixed,free,custom',
            'planable_id' => 'required',
            'planable_type' => 'required|string',
        ]);

        $data = $request->except('features');

        if ($request->type === 'free' || $request->type === 'custom') {
            $data['price'] = null;
        }

        $pricePlan->update($data);

        if ($request->has('features')) {
            $features = [];
            foreach ($request->features as $featureId => $featureData) {
                if (isset($featureData['id'])) {
                    $features[$featureId] = ['is_active' => $featureData['is_active']];
                }
            }
            $pricePlan->features()->sync($features);
        } else {
            $pricePlan->features()->sync([]);
        }

        return redirect()->route('admin.price-plans.index')->with('success', 'Price Plan updated successfully.');
    }

    public function destroy(PricePlan $pricePlan)
    {
        $pricePlan->delete();
        return redirect()->route('admin.price-plans.index')->with('success', 'Price Plan deleted successfully.');
    }
}
