@extends('admin.layouts.app')

@section('title', 'Edit Articles')
@section('header-title', 'Edit Articles')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Article</h1>

    <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$article->title" required />
        <x-admin.select name="article_category_id" label="Category" :options="$categories->pluck('title', 'id')" :value="$article->article_category_id" required />
        <x-admin.multi-select name="tags" label="Tags" :options="$tags->pluck('name', 'id')" :values="$article->tags->pluck('id')->toArray()" />
        <x-admin.file-input name="thumbnail" label="Thumbnail" :value="$article->thumbnail" />
        <x-admin.textarea name="short_text" label="Short Text" :value="$article->short_text" />
        <x-admin.ckeditor name="long_text" label="Long Text" :value="$article->long_text" />
        <x-admin.text-input name="meta_title" label="Meta Title" :value="$article->meta_title" />
        <x-admin.textarea name="meta_description" label="Meta Description" :value="$article->meta_description" />
        <x-admin.checkbox-input name="is_active" label="Active" :value="$article->is_active" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tags').select2();
        });
    </script>
@endpush
