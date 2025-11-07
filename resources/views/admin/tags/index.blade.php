@extends('admin.layouts.app')

@section('title', 'Index Tags')
@section('header-title', 'Index Tags')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Tags</h1>
        <x-admin.create-button :route="route('admin.tags.create')" />
    </div>

    <div class="mb-4">
        <form action="{{ route('admin.tags.index') }}" method="GET">
            <div class="flex items-center">
                <input type="text" name="q" value="{{ request()->q }}" class="border border-gray-300 rounded-l-md px-4 py-2 w-full" placeholder="Search by name...">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Search</button>
            </div>
        </form>
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td class="border px-4 py-2">{{ $tag->name }}</td>
                    <td class="border px-4 py-2">
                        <x-admin.actions-dropdown
                            :editUrl="route('admin.tags.edit', $tag)"
                            :deleteRoute="route('admin.tags.destroy', $tag)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

<div class="mt-4">
    {{ $tags->links() }}
</div>
@endsection
