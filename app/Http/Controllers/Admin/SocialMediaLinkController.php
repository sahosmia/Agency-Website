<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreSocialMediaLinkRequest;
use App\Http\Requests\UpdateSocialMediaLinkRequest;
use App\Models\SocialMediaLink;
use Illuminate\Http\Request;

class SocialMediaLinkController extends Controller
{
    use FileUploadTrait;
    public function index(Request $request)
    {
        $query = SocialMediaLink::query();

        if ($request->filled('q')) {
            $query->where('name', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $socialMediaLinks = $query->latest()->paginate(10);
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
        SocialMediaLink::create($data);
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
        $socialMediaLink->update($data);
        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link updated successfully.');
    }

    public function destroy(SocialMediaLink $socialMediaLink)
    {
                $this->deleteFile($socialMediaLink, 'icon');

        $socialMediaLink->delete();
        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link deleted successfully.');
    }
}
