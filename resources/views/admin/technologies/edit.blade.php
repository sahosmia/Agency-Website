@extends('admin.layouts.app')

@section('title', 'Edit Technology')
@section('header-title', 'Edit Technology')

@section('content')
    <x-admin.back-button :route="route('admin.technologies.index')" />
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Technology</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.technologies.update', $technology) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$technology->name" required />
        <x-admin.textarea name="description" label="Description" :value="$technology->description" />
        <x-admin.file-input name="image" label="Image" :value="$technology->image" />
        <x-admin.checkbox name="is_active" label="Active" value="1" :checked="$technology->is_active" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
