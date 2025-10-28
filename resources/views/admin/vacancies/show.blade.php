@extends('admin.layouts.app')

@section('title', 'Show Vacancy')
@section('header-title', 'Show Vacancy')

@section('content')
    <div class="p-6 bg-white shadow-md rounded-lg">
        <div class="mb-4">
            <h2 class="text-2xl font-bold">{{ $vacancy->title }}</h2>
        </div>
        <div class="mb-4">
            <strong>Category:</strong> {{ $vacancy->vacancy_category->name }}
        </div>
        <div>
            {!! $vacancy->description !!}
        </div>
        <div class="mt-4">
            <a href="{{ route('admin.vacancies.index') }}" class="text-blue-500 hover:underline">Back to Vacancies</a>
        </div>
    </div>
@endsection
