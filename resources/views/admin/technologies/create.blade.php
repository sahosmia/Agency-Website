@extends('admin.layouts.app')

@section('title', 'Create Technology')
@section('header-title', 'Create Technology')

@section('content')
    <x-admin.back-button :route="route('admin.technologies.index')" />
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Create Technology</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.technologies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.textarea name="description" label="Description" />
        <x-admin.file-input name="image" label="Image" />
        <x-admin.checkbox name="is_active" label="Active" value="1" checked />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
