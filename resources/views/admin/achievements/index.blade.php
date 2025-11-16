@extends('admin.layouts.app')

@section('title', 'Index Achievements')
@section('header-title', 'Index Achievements')




@section('back-button')
<x-admin.button :route="route('admin.achievements.create')" text="Create Achievement" />
@endsection
@section('content')
<div class="mb-4">
    <form action="{{ route('admin.achievements.index') }}" method="GET">
        <div class="flex items-center">
            <input type="text" name="q" value="{{ request()->q }}"
                class="border border-gray-300 rounded-l-md px-4 py-2 w-1/2" placeholder="Search by title...">


            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Filter</button>
        </div>
    </form>
</div>

<div class="bg-white border border-gray-100 shadow-sm rounded-xl overflow-hidden">
    <table class="w-full text-sm text-gray-700">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr class="bg-gray-200">

                <th class="px-5 py-3 text-left font-medium text-gray-600">Title</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Description</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Value</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Show on Home Page</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Sort Order</th>
                <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($achievements as $achievement)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-5 py-3">{{ $achievement->title }}</td>
                <td class="px-5 py-3">{{ $achievement->description }}</td>
                <td class="px-5 py-3">{{ $achievement->value }}</td>
                <td class="px-5 py-3">{{ $achievement->home_page_show ? 'Yes' : 'No' }}</td>
                <td class="px-5 py-3">{{ $achievement->sort }}</td>


                <td class="px-5 py-3 text-right">
                    <x-admin.actions-dropdown :editUrl="route('admin.achievements.edit', $achievement)"
                        :deleteRoute="route('admin.achievements.destroy', $achievement)" />
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $achievements->appends(request()->query())->links() }}
</div>
@endsection
