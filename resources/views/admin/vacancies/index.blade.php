@extends('admin.layouts.app')

@section('title', 'Index Vacancies')
@section('header-title', 'Index Vacancies')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Vacancies</h1>
    <x-admin.create-button :route="route('admin.vacancies.create')" />
</div>

<table class="w-full bg-white shadow-md rounded-lg">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Title</th>
            <th class="px-4 py-2">Category</th>
            <th class="px-4 py-2">Location</th>
            <th class="px-4 py-2">End Date</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vacancies as $vacancy)
        <tr>
            <td class="border px-4 py-2">{{ $vacancy->title }}</td>
            <td class="border px-4 py-2">{{ $vacancy->vacancy_category->title }}</td>
            <td class="border px-4 py-2">{{ $vacancy->location }}</td>
            <td class="border px-4 py-2">{{ $vacancy->end_date }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('admin.vacancies.show', $vacancy) }}"
                    class="text-green-500 hover:underline mr-2">Show</a>
                <a href="{{ route('admin.vacancies.edit', $vacancy) }}" class="text-blue-500 hover:underline">Edit</a>
                <x-admin.delete-button :route="route('admin.vacancies.destroy', $vacancy)" />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection