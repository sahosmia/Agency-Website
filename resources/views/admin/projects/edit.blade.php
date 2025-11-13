@extends('admin.layouts.app')

@section('title', 'Edit Projects')
@section('header-title', 'Edit Projects')

@section('back-button')
    <x-admin.button outline :route="route('admin.projects.index')" text="Back" />
@endsection

@section('content')
<div class="rounded bg-white p-10 w-9/12 mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Project</h1>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$project->title" required />
        <x-admin.select name="category_id" label="Category" :options="$categories->pluck('title', 'id')" :value="$project->category_id" required />
        <x-admin.file-input name="thumbnail" label="Thumbnail" :value="$project->thumbnail" />
        <x-admin.text-input name="meta_title" label="Meta Title" :value="$project->meta_title" />
        <x-admin.textarea name="meta_description" label="Meta Description" :value="$project->meta_description" />
        <x-admin.text-input name="sort" label="Sort Order" type="number" :value="$project->sort" />
        <x-admin.switch-input name="is_active" label="Active" :value="$project->is_active" />

        <div class="card">
            <div class="card-body">
                <x-admin.faq-repeater :faqs="$project->faqs" />
            </div>
        </div>

        <x-admin.button type="submit" text="Update Project" class="mt-5" />
        <x-admin.button outline :route="route('admin.projects.index')" text="Cancel" />
    </form>
</div>
@endsection
