@extends('admin.layouts.app')

@section('title', 'Create Services')
@section('header-title', 'Create Services')

@section('content')
<x-admin.back-button :route="route('admin.services.index')" />
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Create Service</h1>
</div>

<x-admin.validation-errors />

<form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <x-admin.text-input name="name" label="Name" required />
    <x-admin.select name="category_id" label="Category" :options="$categories->pluck('title', 'id')" required />
    <x-admin.textarea name="description" label="Description" />
    <x-admin.file-input name="image" label="Image" />
    <x-admin.text-input name="meta_title" label="Meta Title" />
    <x-admin.textarea name="meta_description" label="Meta Description" />
    <x-admin.checkbox name="is_active" label="Active" value="1" checked />

    <div class="card">
        <div class="card-body">
            <x-admin.faq-repeater />
        </div>
    </div>

    <x-admin.submit-button label="Create" />
</form>
@endsection
