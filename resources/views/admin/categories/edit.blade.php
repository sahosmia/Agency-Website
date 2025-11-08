@extends('admin.layouts.app')

@section('title', 'Edit Category')
@section('header-title', 'Edit Category')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Category</h1>

    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$category->name" required />
        <x-admin.checkbox name="is_active" label="Active" :checked="$category->is_active" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
