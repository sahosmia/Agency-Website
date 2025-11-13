@extends('admin.layouts.app')

@section('title', 'Edit Team Member')
@section('header-title', 'Edit Team Member')

@section('back-button')
<x-admin.button outline :route="route('admin.teams.index')" text="Back" />
@endsection

@section('content')
<div class="rounded bg-white p-10 w-9/12 mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Team Member</h1>

    <form action="{{ route('admin.teams.update', $team) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$team->name" required />
        <x-admin.select name="designation_id" label="Designation" :options="$designations->pluck('title', 'id')"
            :value="$team->designation_id" required />
        <x-admin.file-input name="avatar" label="Avatar" :value="$team->avatar" />
        <x-admin.switch-input name="is_active" label="Active" :value="$team->is_active" />

        <x-admin.button type="submit" text="Update Team Member" class="mt-5" />
        <x-admin.button outline :route="route('admin.teams.index')" text="Cancel" />
    </form>
</div>
@endsection