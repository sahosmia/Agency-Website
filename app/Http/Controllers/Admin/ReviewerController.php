<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReviewerRequest;
use App\Models\Reviewer;
use Illuminate\Http\Request;
use App\Services\ReviewerService;
use Illuminate\Support\Facades\Storage;

class ReviewerController extends Controller
{
    protected $reviewerService;

    public function __construct(ReviewerService $reviewerService)
    {
        $this->reviewerService = $reviewerService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviewers = $this->reviewerService->getAllReviewers();
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
        $this->reviewerService->storeReviewer($data);
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
        $this->reviewerService->updateReviewer($reviewer, $data);
        return redirect()->route('admin.reviewers.index')->with('success', 'Reviewer updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviewer $reviewer)
    {
        $this->reviewerService->deleteReviewer($reviewer);
        return redirect()->route('admin.reviewers.index')->with('success', 'Reviewer deleted successfully.');
    }
}
