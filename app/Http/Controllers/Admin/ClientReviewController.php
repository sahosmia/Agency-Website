<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Models\ClientReview;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreClientReviewRequest;
use App\Http\Requests\UpdateClientReviewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientReviewController extends Controller
{
    use FileUploadTrait, AdminPagination;

    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();

        $query = ClientReview::query();

        if ($request->filled('q')) {
            $query->where('name', 'like', "%{$request->q}%");
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $clientReviews = $query->latest()->paginate($adminPagination);

        return view('admin.client-reviews.index', compact('clientReviews'));
    }

    public function create()
    {
        $services = \App\Models\Service::pluck('name', 'id');
        $projects = \App\Models\Project::pluck('title', 'id');
        $softwares = \App\Models\Software::pluck('name', 'id');
        return view('admin.client-reviews.create', compact('services', 'projects', 'softwares'));
    }

    public function store(StoreClientReviewRequest $request)
    {
        $clientReview = new ClientReview($request->validated());
        $clientReview->is_active = $request->boolean('is_active');

        if ($request->reviewable_type) {
            $clientReview->reviewable_id = $request->reviewable_id;
            $clientReview->reviewable_type = $request->reviewable_type;
        }

        if ($request->hasFile('avatar')) {
            $clientReview->avatar = $this->uploadFile($request->file('avatar'), 'uploads/client_reviews');
        }

        $clientReview->save();

        return redirect()->route('admin.client-reviews.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(ClientReview $clientReview)
    {
        $services = \App\Models\Service::pluck('name', 'id');
        $projects = \App\Models\Project::pluck('title', 'id');
        $softwares = \App\Models\Software::pluck('name', 'id');
        return view('admin.client-reviews.edit', compact('clientReview', 'services', 'projects', 'softwares'));
    }

    public function update(UpdateClientReviewRequest $request, ClientReview $clientReview)
    {
        $clientReview->fill($request->validated());
        $clientReview->is_active = $request->boolean('is_active');

        if ($request->reviewable_type) {
            $clientReview->reviewable_id = $request->reviewable_id;
            $clientReview->reviewable_type = $request->reviewable_type;
        } else {
            $clientReview->reviewable_id = null;
            $clientReview->reviewable_type = null;
        }

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
