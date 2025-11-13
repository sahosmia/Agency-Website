@extends('admin.layouts.app')

@section('title', 'Edit Team Member')
@section('header-title', 'Edit Team Member')
@section('breadcrumbs')
<div class="breadcrumb-item"><a href="{{ route('admin.teams.index') }}">Team Members</a></div>
<div class="breadcrumb-item">Edit</div>
@endsection

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Edit Team Member</h1>
</div>

<x-admin.validation-errors />

<form action="{{ route('admin.teams.update', $team) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <x-admin.text-input name="name" label="Name" :value="$team->name" required />
    <x-admin.select name="designation_id" label="Designation" :options="$designations->pluck('title', 'id')"
        :value="$team->designation_id" required />
    <div class="mb-4">
        <label for="avatar" class="block text-gray-700 font-bold mb-2">Avatar</label>
        <input type="file" name="avatar" id="avatar"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @if ($team->avatar)
        <img src="{{ $team->avatar_url }}" alt="{{ $team->name }}" class="h-16 w-16 object-cover mt-2">
        @endif
    </div>
    <x-admin.checkbox name="is_active" label="Active" value="1" :checked="$team->is_active" />

    <x-admin.submit-button label="Update" />
</form>
@endsection
