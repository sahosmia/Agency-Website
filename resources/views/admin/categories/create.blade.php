@extends('admin.layouts.app')

@section('title', 'Create Categories')
@section('header-title', 'Create Categories')

@section('content')
    <x-admin.back-button :route="route('admin.categories.index')" />
    <h1 class="text-2xl font-bold mb-4">Create  Category</h1>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="title" label="Title" required />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
