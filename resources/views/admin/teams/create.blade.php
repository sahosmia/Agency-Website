@extends('admin.layouts.app')

@section('title', 'Create Team Member')
@section('header-title', 'Create Team Member')
@section('breadcrumbs')
    <div class="breadcrumb-item"><a href="{{ route('admin.teams.index') }}">Team Members</a></div>
    <div class="breadcrumb-item">Create</div>
@endsection

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Create Team Member</h1>
</div>

<x-admin.validation-errors />

    <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.select name="designation_id" label="Designation" :options="$designations->pluck('title', 'id')" required />
        <x-admin.file-input name="avatar" label="Avatar" />
        <x-admin.checkbox name="is_active" label="Active" value="1" checked />

        <x-admin.submit-button label="Create" />
    </form>
@endsection
