<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReviewerRequest;
use App\Models\Reviewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviewers = Reviewer::all();
        return view('admin.reviewers.index', compact('reviewers'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reviewers.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewerRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('reviewers', 'public');
        }
        Reviewer::create($data);
        return redirect()->route('admin.reviewers.index')->with('success', 'Reviewer created successfully.');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviewer $reviewer)
    {
        return view('admin.reviewers.edit', compact('reviewer'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewerRequest $request, Reviewer $reviewer)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            // Delete old image
            if ($reviewer->image) {
                Storage::disk('public')->delete($reviewer->image);
            }
            $data['image'] = $request->file('image')->store('reviewers', 'public');
        }
        $reviewer->update($data);
        return redirect()->route('admin.reviewers.index')->with('success', 'Reviewer updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviewer $reviewer)
    {
        // Delete image
        if ($reviewer->image) {
            Storage::disk('public')->delete($reviewer->image);
        }
        $reviewer->delete();
        return redirect()->route('admin.reviewers.index')->with('success', 'Reviewer deleted successfully.');
    }
}
