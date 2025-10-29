@extends('admin.layouts.app')

@section('title', 'Edit Vacancy Categories')
@section('header-title', 'Edit Vacancy Categories')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Vacancy Category</h1>

    <form action="{{ route('admin.vacancy-categories.update', $vacancyCategory) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="title" label="Title" :value="$vacancyCategory->title" required />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
