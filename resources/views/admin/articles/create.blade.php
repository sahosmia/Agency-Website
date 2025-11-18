@extends('admin.layouts.app')

@section('title', 'Create Articles')
@section('header-title', 'Create Articles')


@section('back-button')
<x-admin.button outline :route="route('admin.articles.index')" text="Back" />
@endsection

@section('content')

{{-- make good design --}}
<div class="rounded bg-white p-10 w-9/12 mx-auto">

    <h1 class="text-2xl font-bold mb-4">Create Article</h1>

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="title" label="Title" required />
        <x-admin.select name="category_id" label="Category" :options="$categories->pluck('title', 'id')" required />
        <x-admin.multi-select name="tags" label="Tags" :options="$tags->pluck('name', 'id')" />
        <x-admin.file-input name="thumbnail" label="Thumbnail" />
        <x-admin.textarea name="short_text" label="Short Text" />
        <x-admin.ckeditor name="long_text" label="Long Text" />
        <x-admin.text-input name="meta_title" label="Meta Title" />
        <x-admin.textarea name="meta_description" label="Meta Description" />
        {{--
        <x-admin.checkbox-input name="is_active" label="Active" checked /> --}}
        <x-admin.switch-input name="is_active" label="Active" checked />
        {{-- Submit button --}}
        <x-admin.button type="submit" text="Create" class="mt-5" />
        {{-- cancle button --}}
        <x-admin.button outline :route="route('admin.articles.index')" text="Cancel" class="mt-5 ml-2" />
    </form>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
            $('#tags').select2();
        });
</script>
@endpush
