<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Software;
use App\Models\SoftwareCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SoftwareController extends Controller
{
    public function index()
    {
        $softwares = Software::with('category')->get();
        return view('admin.softwares.index', compact('softwares'));
    }

    public function create()
    {
        $categories = SoftwareCategory::all();
        return view('admin.softwares.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:softwares',
            'software_category_id' => 'required|exists:software_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('softwares', 'public');
            $data['image'] = $path;
        }

        Software::create($data);

        return redirect()->route('admin.softwares.index')->with('success', 'Software created successfully.');
    }

    public function edit(Software $software)
    {
        $categories = SoftwareCategory::all();
        return view('admin.softwares.edit', compact('software', 'categories'));
    }

    public function update(Request $request, Software $software)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:softwares,slug,' . $software->id,
            'software_category_id' => 'required|exists:software_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($software->image) {
                Storage::disk('public')->delete($software->image);
            }
            $path = $request->file('image')->store('softwares', 'public');
            $data['image'] = $path;
        }

        $software->update($data);

        return redirect()->route('admin.softwares.index')->with('success', 'Software updated successfully.');
    }

    public function destroy(Software $software)
    {
        if ($software->image) {
            Storage::disk('public')->delete($software->image);
        }
        $software->delete();

        return redirect()->route('admin.softwares.index')->with('success', 'Software deleted successfully.');
    }
}
