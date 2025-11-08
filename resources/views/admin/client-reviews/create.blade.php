@extends('admin.layouts.app')

@section('title', 'Create Testimonial')
@section('header-title', 'Create Testimonial')
@section('breadcrumbs')
    <div class="breadcrumb-item"><a href="{{ route('admin.client-reviews.index') }}">Testimonials</a></div>
    <div class="breadcrumb-item">Create</div>
@endsection

@section('content')
    <x-admin.back-button :route="route('admin.client-reviews.index')" />
    <h1 class="text-2xl font-bold mb-4">Create Testimonial</h1>

    <form action="{{ route('admin.client-reviews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.text-input name="designation" label="Designation" required />
        <x-admin.file-input name="avatar" label="Avatar" />
        <x-admin.text-input name="rating" label="Rating" required />
        <x-admin.textarea name="review" label="Review" required />
        <x-admin.text-input name="sort" label="Sort Order" type="number" value="0" />
        <x-admin.checkbox-input name="is_active" label="Active" checked />

        <x-admin.submit-button label="Create" />
    </form>
@endsection
