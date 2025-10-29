@extends('admin.layouts.app')

@section('title', 'Create Vacancy Categories')
@section('header-title', 'Create Vacancy Categories')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Vacancy Category</h1>

    <form action="{{ route('admin.vacancy-categories.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="title" label="Title" required />
        <x-admin.text-input name="slug" label="Slug" required />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
