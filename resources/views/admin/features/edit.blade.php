@extends('admin.layouts.app')

@section('title', 'Edit Feature')
@section('header-title', 'Edit Feature')

@section('content')
    <x-admin.back-button :route="route('admin.features.index')" />
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Feature</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.features.update', $feature) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$feature->name" required />
        <x-admin.textarea name="description" label="Description" :value="$feature->description" />
        <x-admin.checkbox name="is_active" label="Active" value="1" :checked="$feature->is_active" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
