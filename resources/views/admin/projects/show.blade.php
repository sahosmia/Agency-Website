@extends('admin.layouts.app')

@section('title', 'Show Project')
@section('header-title', 'Show Project')

@section('content')
    <div class="p-6 bg-white shadow-md rounded-lg">
        <div class="mb-4">
            <h2 class="text-2xl font-bold">{{ $project->title }}</h2>
        </div>
        <div class="mb-4">
            <strong>Category:</strong> {{ $project->project_category->title }}
        </div>
        @if ($project->thumbnail)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}"
                    class="h-48 w-full object-cover">
            </div>
        @endif
        <div>
            {!! $project->description !!}
        </div>
        <div class="mt-4">
            <a href="{{ route('admin.projects.index') }}" class="text-blue-500 hover:underline">Back to Projects</a>
        </div>
    </div>
@endsection
