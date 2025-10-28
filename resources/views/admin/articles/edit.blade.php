@extends('admin.layouts.app')

@section('title', 'Edit Articles')
@section('header-title', 'Edit Articles')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Article</h1>

    <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$article->title" required />
        <x-admin.text-input name="slug" label="Slug" :value="$article->slug" required />
        <x-admin.select name="article_category_id" label="Category" :options="$categories->pluck('name', 'id')" :value="$article->article_category_id" required />
        <x-admin.multi-select name="tags" label="Tags" :options="$tags->pluck('name', 'id')" :values="$article->tags->pluck('id')->toArray()" />
        <x-admin.file-input name="thumbnail" label="Thumbnail" :value="$article->thumbnail" />
        <x-admin.textarea name="short_text" label="Short Text" :value="$article->short_text" />
        <x-admin.textarea name="long_text" label="Long Text" :value="$article->long_text" />
        <x-admin.submit-button label="Update" />
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
