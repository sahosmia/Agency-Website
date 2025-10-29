@extends('admin.layouts.app')

@section('title', 'Edit Article Categories')
@section('header-title', 'Edit Article Categories')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Article Category</h1>

    <form action="{{ route('admin.article-categories.update', $articleCategory) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$articleCategory->title" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
