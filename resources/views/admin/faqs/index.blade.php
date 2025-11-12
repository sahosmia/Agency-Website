@extends('admin.layouts.app')

@section('title', 'Index Faqs')
@section('header-title', 'Index Faqs')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">FAQs</h1>
    <x-admin.create-button :route="route('admin.page-faqs.create')" />
</div>

<div class="mb-4">
    <form action="{{ route('admin.page-faqs.index') }}" method="GET">
        <div class="flex items-center">
            <input type="text" name="q" value="{{ request()->q }}"
                class="border border-gray-300 rounded-l-md px-4 py-2 w-1/3" placeholder="Search by question...">
            <select name="status" class="border border-gray-300 px-4 py-2 w-1/3">
                <option value="">All Statuses</option>
                <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            <select name="page" class="border border-gray-300 px-4 py-2 w-1/3">
                <option value="">All Pages</option>
                @foreach ($pages as $page)
                <option value="{{ $page }}" {{ request()->page == $page ? 'selected' : '' }}>{{ ucfirst($page) }}
                </option>
                @endforeach
            </select>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Filter</button>
        </div>
    </form>
</div>

<table class="w-full bg-white shadow-md rounded-lg">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Question</th>
            <th class="px-4 py-2">Answer</th>
            <th class="px-4 py-2">Page</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2 w-24">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($faqs as $faq)
        <tr>
            <td class="border px-4 py-2">{{ $faq->question }}</td>
            <td class="border px-4 py-2">{{ $faq->answer }}</td>
            <td class="border px-4 py-2">{{ ucfirst($faq->page) }}</td>
            <td class="border px-4 py-2">
                <x-admin.status-badge :is-active="$faq->is_active" />
            </td>
            <td class="border px-4 py-2">
                <x-admin.actions-dropdown :editUrl="route('admin.page-faqs.edit', $faq)"
                    :deleteRoute="route('admin.page-faqs.destroy', $faq)" />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $faqs->appends(request()->query())->links() }}
</div>
@endsection