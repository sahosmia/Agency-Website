@extends('admin.layouts.app')

@section('title', 'Add Designation')
@section('header-title', 'Add Designation')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.designations.index') }}">Designations</a></li>
<li class="breadcrumb-item active">Add Designation</li>
@endsection

@section('content')
<h1 class="text-2xl font-bold mb-4">Add New Designation</h1>

<form action="{{ route('admin.designations.store') }}" method="POST">
    @csrf
    <x-admin.text-input name="title" label="Title" required />
    <x-admin.textarea name="description" label="Description" />
    <x-admin.submit-button label="Save" />
</form>
@endsection
