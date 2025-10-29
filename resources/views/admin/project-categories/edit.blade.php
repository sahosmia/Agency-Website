@extends('admin.layouts.app')

@section('title', 'Edit Project Categories')
@section('header-title', 'Edit Project Categories')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Project Category</h1>

    <form action="{{ route('admin.project-categories.update', $projectCategory) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$projectCategory->title" required />
        <x-admin.text-input name="slug" label="Slug" :value="$projectCategory->slug" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
