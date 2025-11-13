@extends('admin.layouts.app')

@section('title', 'Create Projects')
@section('header-title', 'Create Projects')

@section('back-button')
    <x-admin.button outline :route="route('admin.projects.index')" text="Back" />
@endsection

@section('content')
<div class="rounded bg-white p-10 w-9/12 mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create Project</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="title" label="Title" required />
        <x-admin.select name="category_id" label="Category" :options="$categories->pluck('title', 'id')" required />
        <x-admin.file-input name="thumbnail" label="Thumbnail" />
        <x-admin.text-input name="meta_title" label="Meta Title" />
        <x-admin.textarea name="meta_description" label="Meta Description" />
        <x-admin.text-input name="sort" label="Sort Order" type="number" value="0" />
        <x-admin.switch-input name="is_active" label="Active" checked />

        <div class="card">
            <div class="card-body">
                <x-admin.faq-repeater />
            </div>
        </div>

        <x-admin.button type="submit" text="Create" class="mt-5" />
        <x-admin.button outline :route="route('admin.projects.index')" text="Cancel" class="mt-5 ml-2" />
    </form>
</div>
@endsection
