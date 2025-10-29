@extends('admin.layouts.app')

@section('title', 'Create Articles')
@section('header-title', 'Create Articles')

@section('breadcrumbs')
    <span class="text-gray-500">/</span>
    <a href="{{ route('admin.articles.index') }}" class="hover:underline">Articles</a>
    <span class="text-gray-500">/</span>
    <a href="#" class="hover:underline">Create</a>
@endsection

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Article</h1>

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="title" label="Title" required />
        <x-admin.select name="article_category_id" label="Category" :options="$categories->pluck('title', 'id')" required />
        <x-admin.multi-select name="tags" label="Tags" :options="$tags->pluck('name', 'id')" />
        <x-admin.file-input name="thumbnail" label="Thumbnail" />
        <x-admin.textarea name="short_text" label="Short Text" />
        <x-admin.textarea name="long_text" label="Long Text" />
        <x-admin.submit-button label="Create" />
    </form>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tags').select2();
        });
        ClassicEditor
            .create(document.querySelector('#long_text'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
