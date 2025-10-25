<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSocialMediaLinkRequest;
use App\Http\Requests\UpdateSocialMediaLinkRequest;
use App\Models\SocialMediaLink;

class SocialMediaLinkController extends Controller
{
    public function index()
    {
        $socialMediaLinks = SocialMediaLink::all();
        return view('admin.social_media_links.index', compact('socialMediaLinks'));
    }

    public function create()
    {
        return view('admin.social_media_links.create');
    }

    public function store(StoreSocialMediaLinkRequest $request)
    {
        SocialMediaLink::create($request->validated());
        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link created successfully.');
    }

    public function edit(SocialMediaLink $socialMediaLink)
    {
        return view('admin.social_media_links.edit', compact('socialMediaLink'));
    }

    public function update(UpdateSocialMediaLinkRequest $request, SocialMediaLink $socialMediaLink)
    {
        $socialMediaLink->update($request->validated());
        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link updated successfully.');
    }

    public function destroy(SocialMediaLink $socialMediaLink)
    {
        $socialMediaLink->delete();
        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link deleted successfully.');
    }
}
