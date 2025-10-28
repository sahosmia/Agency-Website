@extends('admin.layouts.app')

@section('title', 'Edit Clients')
@section('header-title', 'Edit Clients')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Client</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.clients.update', $client) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$client->name" required />
        <x-admin.text-input name="location" label="Location" :value="$client->location" required />
        <x-admin.file-input name="image" label="Image" :value="$client->image" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
