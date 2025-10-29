@extends('admin.layouts.app')

@section('title', 'Create Services')
@section('header-title', 'Create Services')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Service</h1>

    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.select name="service_category_id" label="Category" :options="$categories->pluck('name', 'id')" required />
        <x-admin.textarea name="description" label="Description" />
        <x-admin.file-input name="image" label="Image" />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
