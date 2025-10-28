@extends('admin.layouts.app')

@section('title', 'Edit Tags')
@section('header-title', 'Edit Tags')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Tag</h1>

    <form action="{{ route('admin.tags.update', $tag) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$tag->name" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
