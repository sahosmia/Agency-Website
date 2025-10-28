@extends('admin.layouts.app')

@section('title', 'Create Tags')
@section('header-title', 'Create Tags')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Tag</h1>

    <form action="{{ route('admin.tags.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
