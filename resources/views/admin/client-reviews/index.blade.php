@extends('admin.layouts.app')

@section('title', 'Testimonials')
@section('header-title', 'Testimonials')
@section('breadcrumbs')
<div class="breadcrumb-item">Testimonials</div>
@endsection

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Testimonials</h1>
    <x-admin.create-button :route="route('admin.client-reviews.create')" />
</div>

<x-admin.status-message />
<div class="mb-4">
    <form action="{{ route('admin.client-reviews.index') }}" method="GET">
        <div class="flex items-center">
            <input type="text" name="q" value="{{ request()->q }}"
                class="border border-gray-300 rounded-l-md px-4 py-2 w-1/2" placeholder="Search by name...">
            <select name="status" class="border border-gray-300 px-4 py-2 w-1/3">
                <option value="">All Statuses</option>
                <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Filter</button>
        </div>
    </form>
</div>

<table class="w-full bg-white shadow-md rounded-lg">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Designation</th>
            <th class="px-4 py-2">Avatar</th>
            <th class="px-4 py-2">Rating</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2 w-24">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($clientReviews as $clientReview)
        <tr>
            <td class="border px-4 py-2">{{ $clientReview->name }}</td>
            <td class="border px-4 py-2">{{ $clientReview->designation }}</td>
            <td class="border px-4 py-2">
                <img src="{{ $clientReview->avatar_url }}" alt="{{ $clientReview->name }}"
                    class="h-16 w-16 object-cover">
            </td>
            <td class="border px-4 py-2">{{ $clientReview->rating }}</td>
            <td class="border px-4 py-2">
                <x-admin.status-badge :is-active="$clientReview->is_active" />
            </td>
            <td class="border px-4 py-2">
                <x-admin.actions-dropdown :editUrl="route('admin.client-reviews.edit', $clientReview)"
                    :deleteRoute="route('admin.client-reviews.destroy', $clientReview)" />
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center border py-4">No testimonials found.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-4">
    {{ $clientReviews->appends(request()->query())->links() }}
</div>
@endsection
