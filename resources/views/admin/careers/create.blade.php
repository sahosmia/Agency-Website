@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto p-6 bg-white shadow-md">
        <h2 class="text-2xl font-bold mb-4">Create a New Career</h2>

        <form action="{{ route('careers.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Job Title</label>
                <input type="text" name="title" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded" required></textarea>
            </div>

            <!-- Skills Input -->
            <div class="mb-4">
                <label class="block text-gray-700">Skills Required</label>
                <div id="skills-list">
                    <input type="text" name="skills[]" class="w-full p-2 border border-gray-300 rounded mb-2">
                </div>
                <button type="button" id="add-skill" class="px-3 py-1 bg-blue-500 text-white rounded">+ Add Skill</button>
            </div>

            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Save Career</button>
        </form>
    </div>

    <script>
        document.getElementById('add-skill').addEventListener('click', function() {
            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'skills[]';
            input.className = 'w-full p-2 border border-gray-300 rounded mb-2';
            document.getElementById('skills-list').appendChild(input);
        });
    </script>
@endsection
