@extends('admin.layouts.app')

@section('title', 'Edit Vacancies')
@section('header-title', 'Edit Vacancies')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Vacancy</h1>
{{-- @dd($vacancy->toArray()); --}}
<form action="{{ route('admin.vacancies.update', $vacancy) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-admin.text-input name="title" label="Title" :value="$vacancy->title" required />
        <x-admin.select name="vacancy_category_id" label="Category" :options="$categories->pluck('title', 'id')"
            :value="$vacancy->vacancy_category_id" required />
        <x-admin.text-input name="type" label="Type" :value="$vacancy->type" />
        <x-admin.text-input name="location" label="Location" :value="$vacancy->location" />
        <x-admin.text-input name="end_date" label="End Date" :value="$vacancy->end_date" />
        <x-admin.text-input name="salary" label="Salary" :value="$vacancy->salary" />
        <x-admin.text-input name="weekly_holidays" label="Weekly Holidays" :value="$vacancy->weekly_holidays" />
    </div>
    <x-admin.textarea name="benefits" label="Benefits"
        :value="is_array($vacancy->benefits) ? implode(', ', $vacancy->benefits) : $vacancy->benefits" />
    <x-admin.textarea name="responsibilities" label="Responsibilities"
        :value="is_array($vacancy->responsibilities) ? implode(', ', $vacancy->responsibilities) : $vacancy->responsibilities" />
    <x-admin.textarea name="requirements" label="Requirements":value="is_array($vacancy->requirements) ? implode(', ', $vacancy->requirements) : $vacancy->requirements"/>
    <x-admin.textarea name="skills_required" label="Skills Required" :value="is_array($vacancy->skills_required) ? implode(', ', $vacancy->skills_required) : $vacancy->skills_required" />
    <x-admin.textarea name="others" label="Others" :value="$vacancy->others" />
    <x-admin.checkbox-input name="is_active" label="Active" :value="$vacancy->is_active" />
    <x-admin.submit-button label="Update" />
</form>
@endsection
