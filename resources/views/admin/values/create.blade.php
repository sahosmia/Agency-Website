@extends('admin.layouts.app')

@section('title', 'Create Values')
@section('header-title', 'Create Values')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Create Value</h1>
</div>

<x-admin.validation-errors />

<form action="{{ route('admin.values.store') }}" method="POST">
    @csrf
    <x-admin.text-input name="title" label="Title" required />
    <x-admin.textarea name="description" label="Description" />
    <x-admin.switch-input name="is_active" label="Active" checked />
    <x-admin.submit-button label="Create" />
</form>
@endsection