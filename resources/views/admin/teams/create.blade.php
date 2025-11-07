@extends('admin.layouts.app')

@section('title', 'Create Team Member')
@section('header-title', 'Create Team Member')
@section('breadcrumbs')
    <div class="breadcrumb-item"><a href="{{ route('admin.teams.index') }}">Team Members</a></div>
    <div class="breadcrumb-item">Create</div>
@endsection

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Team Member</h1>

    <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.select name="designation_id" label="Designation" :options="$designations->pluck('title', 'id')" required />
        <x-admin.file-input name="avatar" label="Avatar" />
        <x-admin.checkbox-input name="is_active" label="Active" checked />

        <x-admin.submit-button label="Create" />
    </form>
@endsection
