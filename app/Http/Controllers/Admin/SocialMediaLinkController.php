<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreSocialMediaLinkRequest;
use App\Http\Requests\UpdateSocialMediaLinkRequest;
use App\Models\SocialMediaLink;
use Illuminate\Http\Request;
use App\Services\SocialMediaLinkService;

class SocialMediaLinkController extends Controller
{
    use FileUploadTrait;

    protected $socialMediaLinkService;

    public function __construct(SocialMediaLinkService $socialMediaLinkService)
    {
        $this->socialMediaLinkService = $socialMediaLinkService;
    }

    public function index(Request $request)
    {
        $socialMediaLinks = $this->socialMediaLinkService->getSocialMediaLinks($request->all(), 10);
        return view('admin.social_media_links.index', compact('socialMediaLinks'));
    }

    public function create()
    {
        return view('admin.social_media_links.create');
    }

    public function store(StoreSocialMediaLinkRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('icon')) {
            $data['icon'] = $this->uploadFile($request, 'icon', 'social_media_links');
        }
        $this->socialMediaLinkService->storeSocialMediaLink($data);
        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link created successfully.');
    }

    public function edit(SocialMediaLink $socialMediaLink)
    {
        return view('admin.social_media_links.edit', compact('socialMediaLink'));
    }

    public function update(UpdateSocialMediaLinkRequest $request, SocialMediaLink $socialMediaLink)
    {
        $data = $request->validated();
        if ($request->hasFile('icon')) {
            if ($socialMediaLink->icon) {
                $this->deleteFile($socialMediaLink, 'icon');
            }
            $data['icon'] = $this->uploadFile($request, 'icon', 'social_media_links');
        }
        $this->socialMediaLinkService->updateSocialMediaLink($socialMediaLink, $data);
        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link updated successfully.');
    }

    public function destroy(SocialMediaLink $socialMediaLink)
    {
        $this->socialMediaLinkService->deleteSocialMediaLink($socialMediaLink);
        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link deleted successfully.');
    }
}
