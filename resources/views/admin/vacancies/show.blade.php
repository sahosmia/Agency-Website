@extends('admin.layouts.app')

@section('title', 'Show Vacancy')
@section('header-title', 'Show Vacancy')

@section('content')
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-8">
    <!-- Header -->
    <div class="border-b pb-4 mb-6 flex items-center justify-between">
        <h1 class="text-3xl font-semibold text-gray-800">{{ $vacancy->title }}</h1>
        <a href="{{ route('admin.vacancies.index') }}" class="text-sm text-gray-600 hover:text-blue-600 transition">
            ← Back to Vacancies
        </a>
    </div>

    <!-- Vacancy Info Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
        <div>
            <p><span class="font-semibold">Category:</span> {{ $vacancy->category->name ?? 'N/A' }}</p>
            <p><span class="font-semibold">Type:</span> {{ $vacancy->type ?? 'N/A' }}</p>
            <p><span class="font-semibold">Location:</span> {{ $vacancy->location ?? 'N/A' }}</p>
        </div>
        <div>
            <p><span class="font-semibold">End Date:</span> {{ $vacancy->end_date ?? 'N/A' }}</p>
            <p><span class="font-semibold">Salary:</span> {{ $vacancy->salary ?? 'N/A' }}</p>
            <p><span class="font-semibold">Weekly Holidays:</span> {{ $vacancy->weekly_holidays ?? 'N/A' }}</p>
        </div>
    </div>

    <hr class="my-6">

    <!-- Detailed Sections -->
    <div class="space-y-6">
        @if(!empty($vacancy->benefits))
        <div>
            <h3 class="text-lg font-semibold mb-2 text-gray-800">Benefits</h3>
            <ul class="list-disc pl-5 text-gray-700 space-y-1">
                @foreach((array)$vacancy->benefits as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(!empty($vacancy->responsibilities))
        <div>
            <h3 class="text-lg font-semibold mb-2 text-gray-800">Responsibilities</h3>
            <ul class="list-disc pl-5 text-gray-700 space-y-1">
                @foreach((array)$vacancy->responsibilities as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(!empty($vacancy->requirements))
        <div>
            <h3 class="text-lg font-semibold mb-2 text-gray-800">Requirements</h3>
            <ul class="list-disc pl-5 text-gray-700 space-y-1">
                @foreach((array)$vacancy->requirements as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(!empty($vacancy->skills_required))
        <div>
            <h3 class="text-lg font-semibold mb-2 text-gray-800">Skills Required</h3>
            <ul class="list-disc pl-5 text-gray-700 space-y-1">
                @foreach((array)$vacancy->skills_required as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(!empty($vacancy->others))
        <div>
            <h3 class="text-lg font-semibold mb-2 text-gray-800">Others</h3>
            <div class="prose max-w-none">{!! nl2br(e(is_array($vacancy->others) ? implode(', ', $vacancy->others) :
                $vacancy->others)) !!}</div>
        </div>
        @endif
    </div>

    <!-- Footer -->
    <div class="mt-8 flex justify-end space-x-3">
        <a href="{{ route('admin.vacancies.edit', $vacancy) }}"
            class="px-4 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition">
            Edit Vacancy
        </a>
        <a href="{{ route('admin.vacancies.index') }}"
            class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-md hover:bg-gray-200 transition">
            Back
        </a>
    </div>
</div>
@endsection
