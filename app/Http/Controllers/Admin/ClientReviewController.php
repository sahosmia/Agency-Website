<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientReviewController extends Controller
{
    use FileUploadTrait;

    public function index(Request $request)
    {
        $query = ClientReview::query();

        if ($request->filled('q')) {
            $query->where('name', 'like', "%{$request->q}%");
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $clientReviews = $query->latest()->paginate(10);

        return view('admin.client-reviews.index', compact('clientReviews'));
    }

    public function create()
    {
        return view('admin.client-reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' => 'required|string|max:255',
            'review' => 'required|string',
            'is_active' => 'nullable|boolean',
        ]);

        $clientReview = new ClientReview($request->except('avatar'));
        $clientReview->is_active = $request->has('is_active');

        if ($request->hasFile('avatar')) {
            $clientReview->avatar = $this->uploadFile($request->file('avatar'), 'uploads/client_reviews');
        }

        $clientReview->save();

        return redirect()->route('admin.client-reviews.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(ClientReview $clientReview)
    {
        return view('admin.client-reviews.edit', compact('clientReview'));
    }

    public function update(Request $request, ClientReview $clientReview)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' => 'required|string|max:255',
            'review' => 'required|string',
            'is_active' => 'nullable|boolean',
        ]);

        $clientReview->fill($request->except('avatar'));
        $clientReview->is_active = $request->has('is_active');

        if ($request->hasFile('avatar')) {
            $this->deleteFile($clientReview->avatar, 'uploads/client_reviews');
            $clientReview->avatar = $this->uploadFile($request->file('avatar'), 'uploads/client_reviews');
        }

        $clientReview->save();

        return redirect()->route('admin.client-reviews.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(ClientReview $clientReview)
    {
        $this->deleteFile($clientReview->avatar, 'uploads/client_reviews');
        $clientReview->delete();

        return redirect()->route('admin.client-reviews.index')->with('success', 'Testimonial deleted successfully.');
    }
}
