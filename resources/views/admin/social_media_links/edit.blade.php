@extends('admin.layouts.app')

@section('title', 'Edit Social Media Links')
@section('header-title', 'Edit Social Media Links')

@section('content')
<div class="w-9/12 mx-auto bg-white p-5 rounded">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Social Media Link</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.social-media-links.update', $socialMediaLink) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$socialMediaLink->name" required />
        <x-admin.text-input name="url" label="URL" :value="$socialMediaLink->url" required />
        <x-admin.file-input name="icon" label="Icon" :value="'social_media_links/' . $socialMediaLink->icon"
            imgClass="w-10 h-10" />
        <x-admin.checkbox name="is_active" label="Active" value="1" :checked="$socialMediaLink->is_active" />
        <x-admin.submit-button label="Update" />
    </form>
</div>
@endsection