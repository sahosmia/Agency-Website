@extends('admin.layouts.app')

@section('title', 'Edit Designation')
@section('header-title', 'Edit Designation')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.designations.index') }}">Designations</a></li>
<li class="breadcrumb-item active">Edit Designation</li>
@endsection

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Designation</h1>

<form action="{{ route('admin.designations.update', $designation) }}" method="POST">
    @csrf
    @method('PUT')
    <x-admin.text-input name="title" label="Title" :value="$designation->title" required />
    <x-admin.textarea name="description" label="Description" :value="$designation->description" />
    <x-admin.submit-button label="Update" />
</form>
@endsection
