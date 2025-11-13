@extends('admin.layouts.app')

@section('title', 'Edit Trusted Companies')
@section('header-title', 'Edit Trusted Companies')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Trusted Company</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.trusted-companies.update', $trustedCompany) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$trustedCompany->name" required />
        <x-admin.file-input name="logo" label="Logo" :value="$trustedCompany->logo" />
        <x-admin.checkbox name="is_active" label="Active" value="1" :checked="$trustedCompany->is_active" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
