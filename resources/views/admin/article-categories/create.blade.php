@extends('admin.layouts.app')

@section('title', 'Create Article Categories')
@section('header-title', 'Create Article Categories')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Article Category</h1>

    <form action="{{ route('admin.article-categories.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="title" label="Title" required />
        <x-admin.text-input name="slug" label="Slug" required />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
