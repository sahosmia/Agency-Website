@extends('admin.layouts.app')

@section('title', 'Edit Values')
@section('header-title', 'Edit Values')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Value</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.values.update', $value) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$value->title" required />
        <x-admin.textarea name="description" label="Description" :value="$value->description" />
        <x-admin.text-input name="icon" label="Icon" :value="$value->icon" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
