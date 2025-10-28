@extends('admin.layouts.app')

@section('title', 'Index Trusted Companies')
@section('header-title', 'Index Trusted Companies')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Trusted Companies</h1>
        <a href="{{ route('admin.trusted-companies.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create New</a>
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Logo</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trustedCompanies as $trustedCompany)
                <tr>
                    <td class="border px-4 py-2">{{ $trustedCompany->name }}</td>
                    <td class="border px-4 py-2">
                        @if ($trustedCompany->logo)
                            <img src="{{ asset('storage/' . $trustedCompany->logo) }}" alt="{{ $trustedCompany->name }}" class="h-16 w-16 object-cover">
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.trusted-companies.edit', $trustedCompany) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.trusted-companies.destroy', $trustedCompany)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
