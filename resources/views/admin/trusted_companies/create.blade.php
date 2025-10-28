@extends('admin.layouts.app')

@section('title', 'Create Trusted Companies')
@section('header-title', 'Create Trusted Companies')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Create Trusted Company</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.trusted-companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.file-input name="logo" label="Logo" />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
