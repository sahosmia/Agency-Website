<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DesignationController extends Controller
{
    use FileUploadTrait;

    public function index(Request $request)
    {
        $query = Designation::query()->with('designation');

        if ($request->filled('q')) {
            $query->where('title', 'like', "%{$request->q}%");
        }

        $designations = $query->latest()->paginate(10);

        return view('admin.designations.index', compact('designations'));
    }

    public function create()
    {
        $designations = Designation::all();
        return view('admin.designations.create', compact('designations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $designation = new Designation();
        $designation->title = $request->title;
        $designation->slug = Str::slug($request->title);
        $designation->save();

        return redirect()->route('admin.designations.index')->with('success', 'Designation member created successfully.');
    }

    public function edit(Designation $designation)
    {
        $designations = Designation::all();
        return view('admin.designations.edit', compact('designation', 'designations'));
    }

    public function update(Request $request, Designation $designation)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $designation->slug = Str::slug($request->title);
        $designation->save();

        return redirect()->route('admin.designations.index')->with('success', 'Designation member updated successfully.');
    }

    public function destroy(Designation $designation)
    {
        $designation->delete();

        return redirect()->route('admin.designations.index')->with('success', 'Designation member deleted successfully.');
    }
}
