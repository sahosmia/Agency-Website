@extends('admin.layouts.app')

@section('title', 'Create Vacancies')
@section('header-title', 'Create Vacancies')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Create Vacancy</h1>
</div>

<x-admin.validation-errors />

    <form action="{{ route('admin.vacancies.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <x-admin.text-input name="title" label="Title"  />
            <x-admin.select name="category_id" label="Category" :options="$categories->pluck('title', 'id')"  />
            <x-admin.text-input name="type" label="Type" />
            <x-admin.text-input name="location" label="Location" />
            <x-admin.text-input name="end_date" label="End Date" />
            <x-admin.text-input name="salary" label="Salary" />
            <x-admin.text-input name="weekly_holidays" label="Weekly Holidays" />
        </div>
        <x-admin.textarea name="benefits" label="Benefits" />
        <x-admin.textarea name="responsibilities" label="Responsibilities" />
        <x-admin.textarea name="requirements" label="Requirements" />
        <x-admin.textarea name="skills_required" label="Skills Required" />
        <x-admin.textarea name="others" label="Others" />
        <x-admin.checkbox name="is_active" label="Active" value="1" checked />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
