@extends('admin.layouts.app')

@section('title', 'Index Faqs')
@section('header-title', 'Index Faqs')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">FAQs</h1>
        <x-admin.create-button :route="route('admin.faqs.create')" />
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Question</th>
                <th class="px-4 py-2">Answer</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $faq)
                <tr>
                    <td class="border px-4 py-2">{{ $faq->question }}</td>
                    <td class="border px-4 py-2">{{ $faq->answer }}</td>
                    <td class="border px-4 py-2">
                        <x-admin.status-badge :is-active="$faq->is_active" />
                    </td>
                    <td class="border px-4 py-2">
                        <x-admin.actions-dropdown
                            :editUrl="route('admin.faqs.edit', $faq)"
                            :deleteRoute="route('admin.faqs.destroy', $faq)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
