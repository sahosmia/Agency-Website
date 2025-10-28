@extends('admin.layouts.app')

@section('title', 'Index Social Media Links')
@section('header-title', 'Index Social Media Links')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Social Media Links</h1>
        <x-admin.create-button :route="route('admin.social-media-links.create')" />
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">URL</th>
                <th class="px-4 py-2">Icon</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($socialMediaLinks as $socialMediaLink)
                <tr>
                    <td class="border px-4 py-2">{{ $socialMediaLink->name }}</td>
                    <td class="border px-4 py-2">{{ $socialMediaLink->url }}</td>
                    <td class="border px-4 py-2">
                        @if ($socialMediaLink->icon)
                            <img src="{{ asset('storage/' . $socialMediaLink->icon) }}" alt="{{ $socialMediaLink->name }}" class="h-16 w-16 object-cover">
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.social-media-links.edit', $socialMediaLink) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.social-media-links.destroy', $socialMediaLink)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
