@extends('admin.layouts.app')

@section('title', 'FAQs')
@section('header-title', 'FAQs')

@section('back-button')
<x-admin.button :route="route('admin.page-faqs.create')" text="Create FAQ" />
@endsection

@section('content')
<x-admin.status-message />

{{-- Filter Section --}}
<div class="mb-6 bg-white border border-gray-200 rounded-xl shadow-sm p-4">
    <form action="{{ route('admin.page-faqs.index') }}" method="GET"
        class="flex flex-col md:flex-row md:items-end gap-4">

        {{-- Search Input --}}
        <div class="flex-1">
            <label for="q" class="block text-gray-600 text-sm font-medium mb-1">Search by Question</label>
            <input type="text" name="q" id="q" value="{{ request()->q }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition"
                placeholder="Search by question...">
        </div>

        {{-- Status Select --}}
        <div class="w-full md:w-1/5">
            <label for="status" class="block text-gray-600 text-sm font-medium mb-1">Status</label>
            <select name="status" id="status"
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition">
                <option value="">All Statuses</option>
                <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        {{-- Page Select --}}
        <div class="w-full md:w-1/5">
            <label for="page" class="block text-gray-600 text-sm font-medium mb-1">Page</label>
            <select name="page" id="page"
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition">
                <option value="">All Pages</option>
                @foreach ($pages as $page)
                <option value="{{ $page }}" {{ request()->page == $page ? 'selected' : '' }}>{{ ucfirst($page) }}
                </option>
                @endforeach
            </select>
        </div>

        {{-- Filter Button --}}
        <div class="flex">
            <button type="submit"
                class="w-full md:w-auto bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-5 py-2.5 rounded-md transition-colors duration-200 shadow-sm hover:shadow-md">
                Filter
            </button>
        </div>

    </form>
</div>

{{-- Table --}}
<div class="bg-white border border-gray-100 shadow-sm rounded-xl overflow-hidden">
    <table class="w-full text-sm text-gray-700">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-5 py-3 text-left font-medium text-gray-600 w-1/4">Question</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Answer</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600 w-1/6">Page</th>
                <th class="px-5 py-3 text-center font-medium text-gray-600 w-1/12">Status</th>
                <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse ($faqs as $faq)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-5 py-3 font-medium">{{ Str::limit($faq->question, 60) }}</td>
                <td class="px-5 py-3 text-gray-600">{{ Str::limit($faq->answer, 100) }}</td>
                <td class="px-5 py-3">{{ ucfirst($faq->page) }}</td>
                <td class="px-5 py-3 text-center">
                    <x-admin.status-badge :is-active="$faq->is_active" />
                </td>
                <td class="px-5 py-3 text-right">
                    <x-admin.actions-dropdown :editUrl="route('admin.page-faqs.edit', $faq)"
                        :deleteRoute="route('admin.page-faqs.destroy', $faq)" />
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-5 py-6 text-center text-gray-500">
                    No FAQs found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="mt-6">
    {{ $faqs->appends(request()->query())->links() }}
</div>
@endsection
