@extends('admin.layouts.app')

@section('title', 'Create Category')
@section('header-title', 'Create Category')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Category</h1>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.checkbox name="is_active" label="Active" checked />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
