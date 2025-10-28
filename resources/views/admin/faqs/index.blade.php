@extends('admin.layouts.app')

@section('title', 'Index Faqs')
@section('header-title', 'Index Faqs')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">FAQs</h1>
        <a href="{{ route('admin.faqs.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create New</a>
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Question</th>
                <th class="px-4 py-2">Answer</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $faq)
                <tr>
                    <td class="border px-4 py-2">{{ $faq->question }}</td>
                    <td class="border px-4 py-2">{{ $faq->answer }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.faqs.edit', $faq) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.faqs.destroy', $faq)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
