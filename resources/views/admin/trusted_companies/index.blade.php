@extends('admin.layouts.app')

@section('title', 'Index Trusted Companies')
@section('header-title', 'Index Trusted Companies')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Trusted Companies</h1>
        <x-admin.create-button :route="route('admin.trusted-companies.create')" />
    </div>

    <div class="mb-4">
        <form action="{{ route('admin.trusted-companies.index') }}" method="GET">
            <div class="flex items-center">
                <input type="text" name="q" value="{{ request()->q }}" class="border border-gray-300 rounded-l-md px-4 py-2 w-1/2" placeholder="Search by name...">
                <select name="status" class="border border-gray-300 px-4 py-2 w-1/2">
                    <option value="">All Statuses</option>
                    <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Filter</button>
            </div>
        </form>
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2 w-24">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trustedCompanies as $trustedCompany)
                <tr>
                    <td class="border px-4 py-2">
                        <x-admin.image-title :name="$trustedCompany->name" :imagePath="asset('storage/' . $trustedCompany->logo)" />
                    </td>
                    <td class="border px-4 py-2">
                        <x-admin.status-badge :is-active="$trustedCompany->is_active" />
                    </td>
                    <td class="border px-4 py-2">
                        <x-admin.actions-dropdown
                            :editUrl="route('admin.trusted-companies.edit', $trustedCompany)"
                            :deleteRoute="route('admin.trusted-companies.destroy', $trustedCompany)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

<div class="mt-4">
    {{ $trustedCompanies->appends(request()->query())->links() }}
</div>
@endsection
