@extends('admin.layouts.app')

@section('title', 'Edit Vacancy')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Vacancy</h1>

    <form action="{{ route('admin.vacancies.update', $vacancy) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-md" value="{{ old('title', $vacancy->title) }}" required>
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" class="w-full px-3 py-2 border rounded-md" value="{{ old('slug', $vacancy->slug) }}" required>
            </div>
            <div class="mb-4">
                <label for="vacancy_category_id" class="block text-gray-700">Category</label>
                <select name="vacancy_category_id" id="vacancy_category_id" class="w-full px-3 py-2 border rounded-md" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected($vacancy->vacancy_category_id == $category->id)>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="type" class="block text-gray-700">Type</label>
                <input type="text" name="type" id="type" class="w-full px-3 py-2 border rounded-md" value="{{ old('type', $vacancy->type) }}">
            </div>
            <div class="mb-4">
                <label for="location" class="block text-gray-700">Location</label>
                <input type="text" name="location" id="location" class="w-full px-3 py-2 border rounded-md" value="{{ old('location', $vacancy->location) }}">
            </div>
            <div class="mb-4">
                <label for="end_date" class="block text-gray-700">End Date</label>
                <input type="date" name="end_date" id="end_date" class="w-full px-3 py-2 border rounded-md" value="{{ old('end_date', $vacancy->end_date) }}">
            </div>
            <div class="mb-4">
                <label for="salary" class="block text-gray-700">Salary</label>
                <input type="text" name="salary" id="salary" class="w-full px-3 py-2 border rounded-md" value="{{ old('salary', $vacancy->salary) }}">
            </div>
            <div class="mb-4">
                <label for="weekly_holidays" class="block text-gray-700">Weekly Holidays</label>
                <input type="text" name="weekly_holidays" id="weekly_holidays" class="w-full px-3 py-2 border rounded-md" value="{{ old('weekly_holidays', $vacancy->weekly_holidays) }}">
            </div>
        </div>
        <div class="mb-4">
            <label for="benefits" class="block text-gray-700">Benefits</label>
            <textarea name="benefits" id="benefits" class="w-full px-3 py-2 border rounded-md">{{ old('benefits', $vacancy->benefits) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="responsibilities" class="block text-gray-700">Responsibilities</label>
            <textarea name="responsibilities" id="responsibilities" class="w-full px-3 py-2 border rounded-md">{{ old('responsibilities', $vacancy->responsibilities) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="requirements" class="block text-gray-700">Requirements</label>
            <textarea name="requirements" id="requirements" class="w-full px-3 py-2 border rounded-md">{{ old('requirements', $vacancy->requirements) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="skills_required" class="block text-gray-700">Skills Required</label>
            <textarea name="skills_required" id="skills_required" class="w-full px-3 py-2 border rounded-md">{{ old('skills_required', $vacancy->skills_required) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="others" class="block text-gray-700">Others</label>
            <textarea name="others" id="others" class="w-full px-3 py-2 border rounded-md">{{ old('others', $vacancy->others) }}</textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
    </form>
@endsection
