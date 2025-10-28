@extends('admin.layouts.app')

@section('title', 'Create Service Types')
@section('header-title', 'Create Service Types')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Service Type</h1>

    <form action="{{ route('admin.service-types.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.select name="service_id" label="Service" :options="$services->pluck('name', 'id')" required />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
