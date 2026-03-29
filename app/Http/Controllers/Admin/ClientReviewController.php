<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Models\ClientReview;
use App\Http\Requests\StoreClientReviewRequest;
use App\Http\Requests\UpdateClientReviewRequest;
use Illuminate\Http\Request;
use App\Services\ClientReviewService;
use App\Http\Controllers\Traits\FileUploadTrait;

class ClientReviewController extends Controller
{
    use AdminPagination, FileUploadTrait;

    protected $clientReviewService;

    public function __construct(ClientReviewService $clientReviewService)
    {
        $this->clientReviewService = $clientReviewService;
    }

    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();
        $clientReviews = $this->clientReviewService->getClientReviews($request->all(), $adminPagination);

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
        $data = $request->validated();
        $data['is_active'] = $request->boolean('is_active');
        $data['avatar'] = $this->uploadFile($request, 'avatar', 'uploads/client_reviews');

        if ($request->reviewable_type) {
            $data['reviewable_id'] = $request->reviewable_id;
            $data['reviewable_type'] = $request->reviewable_type;
        }

        $this->clientReviewService->storeClientReview($data);
        return redirect()->route('admin.client-reviews.index')->with('success', 'Client Review created successfully.');
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
        $data = $request->validated();
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('avatar')) {
            $this->deleteFile($clientReview->avatar, 'uploads/client_reviews');
            $data['avatar'] = $this->uploadFile($request, 'avatar', 'uploads/client_reviews');
        }

        if ($request->reviewable_type) {
            $data['reviewable_id'] = $request->reviewable_id;
            $data['reviewable_type'] = $request->reviewable_type;
        }

        $this->clientReviewService->updateClientReview($clientReview, $data);
        return redirect()->route('admin.client-reviews.index')->with('success', 'Client Review updated successfully.');
    }

    public function destroy(ClientReview $clientReview)
    {
        $this->deleteFile($clientReview->avatar, 'uploads/client_reviews');
        $this->clientReviewService->deleteClientReview($clientReview);
        return redirect()->route('admin.client-reviews.index')->with('success', 'Client Review deleted successfully.');
    }
}
