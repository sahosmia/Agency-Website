@extends('admin.layouts.app')

@section('title', 'Edit Working Processes')
@section('header-title', 'Edit Working Processes')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Working Process</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.working-processes.update', $workingProcess) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$workingProcess->title" required />
        <x-admin.textarea name="description" label="Description" :value="$workingProcess->description" />
        <x-admin.text-input name="icon" label="Icon" :value="$workingProcess->icon" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
