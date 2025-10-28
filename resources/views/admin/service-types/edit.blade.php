@extends('admin.layouts.app')

@section('title', 'Edit Service Types')
@section('header-title', 'Edit Service Types')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Service Type</h1>

    <form action="{{ route('admin.service-types.update', $serviceType) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$serviceType->name" required />
        <x-admin.select name="service_id" label="Service" :options="$services->pluck('name', 'id')" :value="$serviceType->service_id" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
