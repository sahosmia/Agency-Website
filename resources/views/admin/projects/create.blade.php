@extends('admin.layouts.app')

@section('title', 'Create Projects')
@section('header-title', 'Create Projects')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Create Project</h1>
</div>

<x-admin.validation-errors />

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="title" label="Title" required />
        <x-admin.select name="category_id" label="Category" :options="$categories->pluck('title', 'id')" required />
        <x-admin.file-input name="thumbnail" label="Thumbnail" />
        <x-admin.text-input name="meta_title" label="Meta Title" />
        <x-admin.textarea name="meta_description" label="Meta Description" />
        <x-admin.text-input name="sort" label="Sort Order" type="number" value="0" />
        <x-admin.checkbox name="is_active" label="Active" value="1" checked />

        <div class="card">
            <div class="card-body">
                <x-admin.faq-repeater />
            </div>
        </div>

        <x-admin.submit-button label="Create" />
    </form>
@endsection
