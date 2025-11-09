@extends('admin.layouts.app')

@section('title', 'Show Client')
@section('header-title', 'Show Client')

@section('content')
    <x-admin.back-button :route="route('admin.clients.index')" />
    <div class="p-6 bg-white shadow-md rounded-lg">
        <div class="mb-4">
            <h2 class="text-2xl font-bold">{{ $client->name }}</h2>
        </div>
        @if ($client->image)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}"
                    class="h-48 w-full object-cover">
            </div>
        @endif
        <div class="mt-4">
            <a href="{{ route('admin.clients.index') }}" class="text-blue-500 hover:underline">Back to Clients</a>
        </div>
    </div>
@endsection
