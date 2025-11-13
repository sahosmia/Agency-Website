@extends('admin.layouts.app')

@section('title', 'Edit Key Feature')
@section('header-title', 'Edit Key Feature')

@section('content')
    <x-admin.back-button :route="route('admin.key_features.index')" />
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Key Feature</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.key_features.update', $keyFeature) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$keyFeature->name" required />
        <x-admin.textarea name="description" label="Description" :value="$keyFeature->description" />
        <x-admin.file-input name="image" label="Image" :value="$keyFeature->image" />
        <x-admin.checkbox name="is_active" label="Active" value="1" :checked="$keyFeature->is_active" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
