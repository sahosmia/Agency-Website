@extends('admin.layouts.app')

@section('title', 'Create Social Media Links')
@section('header-title', 'Create Social Media Links')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Create Social Media Link</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.social-media-links.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.text-input name="url" label="URL" required />
        <x-admin.file-input name="icon" label="Icon" />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
