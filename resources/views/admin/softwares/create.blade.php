@extends('admin.layouts.app')

@section('title', 'Create Softwares')
@section('header-title', 'Create Softwares')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Software</h1>

    <form action="{{ route('admin.softwares.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.select name="category_id" label="Category" :options="$categories->pluck('name', 'id')" required />
        <x-admin.file-input name="image" label="Image" />
        <x-admin.text-input name="meta_title" label="Meta Title" />
        <x-admin.textarea name="meta_description" label="Meta Description" />
        <x-admin.checkbox-input name="is_active" label="Active" checked />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
