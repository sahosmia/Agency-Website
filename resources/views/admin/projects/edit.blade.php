@extends('admin.layouts.app')

@section('title', 'Edit Projects')
@section('header-title', 'Edit Projects')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Edit Project</h1>
</div>

<x-admin.validation-errors />

    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$project->title" required />
        <x-admin.select name="category_id" label="Category" :options="$categories->pluck('title', 'id')" :value="$project->category_id" required />
        <x-admin.file-input name="thumbnail" label="Thumbnail" :value="$project->thumbnail" />
        <x-admin.text-input name="meta_title" label="Meta Title" :value="$project->meta_title" />
        <x-admin.textarea name="meta_description" label="Meta Description" :value="$project->meta_description" />
        <x-admin.text-input name="sort" label="Sort Order" type="number" :value="$project->sort" />
        <x-admin.checkbox name="is_active" label="Active" value="1" :checked="$project->is_active" />

        <div class="card">
            <div class="card-body">
                <x-admin.faq-repeater :faqs="$project->faqs" />
            </div>
        </div>

        <x-admin.submit-button label="Update" />
    </form>
@endsection
