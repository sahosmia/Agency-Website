@extends('admin.layouts.app')

@section('title', 'Edit Software Categories')
@section('header-title', 'Edit Software Categories')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Software Category</h1>

    <form action="{{ route('admin.software-categories.update', $softwareCategory) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$softwareCategory->name" required />
        <x-admin.text-input name="slug" label="Slug" :value="$softwareCategory->slug" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
