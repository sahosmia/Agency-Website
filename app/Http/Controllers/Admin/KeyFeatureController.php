<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreKeyFeatureRequest;
use App\Http\Requests\UpdateKeyFeatureRequest;
use App\Models\KeyFeature;
use Illuminate\Http\Request;

class KeyFeatureController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keyFeatures = KeyFeature::latest()->get();
        return view('admin.key_features.index', compact('keyFeatures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.key_features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKeyFeatureRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->uploadFile($request, 'image', 'key_features');
        KeyFeature::create($data);
        return redirect()->route('admin.key_features.index')->with('success', 'Key Feature created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(KeyFeature $keyFeature)
    {
        return view('admin.key_features.show', compact('keyFeature'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KeyFeature $keyFeature)
    {
        return view('admin.key_features.edit', compact('keyFeature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKeyFeatureRequest $request, KeyFeature $keyFeature)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $this->updateFile($request, 'image', 'key_features', $keyFeature->image);
        }
        $keyFeature->update($data);
        return redirect()->route('admin.key_features.index')->with('success', 'Key Feature updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KeyFeature $keyFeature)
    {
        if ($keyFeature->image) {
            $this->deleteFile('key_features', $keyFeature->image);
        }
        $keyFeature->delete();
        return redirect()->route('admin.key_features.index')->with('success', 'Key Feature deleted successfully.');
    }
}
