@extends('admin.layouts.app')

@section('title', 'Edit Softwares')
@section('header-title', 'Edit Softwares')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Software</h1>

    <form action="{{ route('admin.softwares.update', $software) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$software->name" required />
        <x-admin.select name="software_category_id" label="Category" :options="$categories->pluck('name', 'id')" :value="$software->software_category_id" required />
        <x-admin.file-input name="image" label="Image" :value="$software->image" />
        <x-admin.text-input name="meta_title" label="Meta Title" :value="$software->meta_title" />
        <x-admin.textarea name="meta_description" label="Meta Description" :value="$software->meta_description" />
        <x-admin.checkbox-input name="is_active" label="Active" :value="$software->is_active" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
