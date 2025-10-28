@extends('admin.layouts.app')

@section('title', 'Edit Service Categories')
@section('header-title', 'Edit Service Categories')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Service Category</h1>

    <form action="{{ route('admin.service-categories.update', $serviceCategory) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$serviceCategory->name" required />
        <x-admin.text-input name="slug" label="Slug" :value="$serviceCategory->slug" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
