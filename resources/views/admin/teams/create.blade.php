@extends('admin.layouts.app')

@section('title', 'Create Team Member')
@section('header-title', 'Create Team Member')

@section('back-button')
<x-admin.button outline :route="route('admin.teams.index')" text="Back" />
@endsection

@section('content')
<div class="rounded bg-white p-10 w-9/12 mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create Team Member</h1>

    <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.select name="designation_id" label="Designation" :options="$designations->pluck('title', 'id')"
            required />
        <x-admin.file-input name="avatar" label="Avatar" />
        <x-admin.switch-input name="is_active" label="Active" checked />

        <x-admin.button type="submit" text="Create" class="mt-5" />
        <x-admin.button outline :route="route('admin.teams.index')" text="Cancel" class="mt-5 ml-2" />
    </form>
</div>
@endsection