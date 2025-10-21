<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMediaLink;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'icon' => 'required|string|max:255',
        ]);

        SocialMediaLink::create($request->all());

        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link created successfully.');
    }

    public function edit(SocialMediaLink $socialMediaLink)
    {
        return view('admin.social_media_links.edit', compact('socialMediaLink'));
    }

    public function update(Request $request, SocialMediaLink $socialMediaLink)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'icon' => 'required|string|max:255',
        ]);

        $socialMediaLink->update($request->all());

        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link updated successfully.');
    }

    public function destroy(SocialMediaLink $socialMediaLink)
    {
        $socialMediaLink->delete();

        return redirect()->route('admin.social-media-links.index')->with('success', 'Social Media Link deleted successfully.');
    }
}
