@extends('admin.layouts.app')

@section('title', 'Edit Softwares')
@section('header-title', 'Edit Softwares')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Software</h1>

    <form action="{{ route('admin.softwares.update', $software) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$software->name" required />
        <x-admin.text-input name="slug" label="Slug" :value="$software->slug" required />
        <x-admin.select name="software_category_id" label="Category" :options="$categories->pluck('name', 'id')" :value="$software->software_category_id" required />
        <x-admin.file-input name="image" label="Image" :value="$software->image" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
