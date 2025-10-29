@extends('admin.layouts.app')

@section('title', 'Edit Software Categories')
@section('header-title', 'Edit Software Categories')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Software Category</h1>

    <form action="{{ route('admin.software-categories.update', $softwareCategory) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$softwareCategory->title" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
