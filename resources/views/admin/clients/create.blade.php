@extends('admin.layouts.app')

@section('title', 'Create Clients')
@section('header-title', 'Create Clients')

@section('content')
    <x-admin.back-button :route="route('admin.clients.index')" />
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Create Client</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.text-input name="location" label="Location" required />
        <x-admin.file-input name="image" label="Image" />
        <x-admin.checkbox-input name="is_active" label="Active" checked />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
