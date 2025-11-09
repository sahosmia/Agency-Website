@extends('admin.layouts.app')

@section('title', 'Edit  Categories')
@section('header-title', 'Edit Categories')

@section('content')
    <x-admin.back-button :route="route('admin.categories.index')" />
    <h1 class="text-2xl font-bold mb-4">Edit Category</h1>

    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$category->name" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
