@extends('admin.layouts.app')

@section('title', 'Create Feature')
@section('header-title', 'Create Feature')

@section('content')
    <x-admin.back-button :route="route('admin.features.index')" />
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Create Feature</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.features.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.textarea name="description" label="Description" />
        <x-admin.checkbox name="is_active" label="Active" value="1" checked />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
