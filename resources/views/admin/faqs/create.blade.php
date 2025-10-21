@extends('admin.layouts.app')

@section('title', 'Create FAQ')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Create FAQ</h1>
    </div>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.faqs.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="question" class="block text-gray-700">Question</label>
            <input type="text" name="question" id="question" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ old('question') }}" required>
        </div>
        <div class="mb-4">
            <label for="answer" class="block text-gray-700">Answer</label>
            <textarea name="answer" id="answer" class="w-full border-gray-300 rounded-md shadow-sm" required>{{ old('answer') }}</textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create</button>
    </form>
@endsection
