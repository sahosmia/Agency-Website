@extends('admin.layouts.app')

@section('title', 'Edit Projects')
@section('header-title', 'Edit Projects')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Project</h1>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$project->title" required />
        <x-admin.select name="project_category_id" label="Category" :options="$categories->pluck('title', 'id')" :value="$project->project_category_id" required />
        <x-admin.file-input name="thumbnail" label="Thumbnail" :value="$project->thumbnail" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
