@extends('admin.layouts.app')

@section('title', 'Create Service Categories')
@section('header-title', 'Create Service Categories')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Service Category</h1>

    <form action="{{ route('admin.service-categories.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.text-input name="slug" label="Slug" required />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
