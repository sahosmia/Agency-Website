@extends('admin.layouts.app')

@section('title', 'Create Project Categories')
@section('header-title', 'Create Project Categories')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Project Category</h1>

    <form action="{{ route('admin.project-categories.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="title" label="Title" required />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
