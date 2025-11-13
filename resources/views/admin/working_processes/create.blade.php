@extends('admin.layouts.app')

@section('title', 'Create Working Processes')
@section('header-title', 'Create Working Processes')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Create Working Process</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.working-processes.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="title" label="Title" required />
        <x-admin.textarea name="description" label="Description" />
        <x-admin.text-input name="icon" label="Icon" required />
        <x-admin.checkbox name="is_active" label="Active" value="1" checked />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
