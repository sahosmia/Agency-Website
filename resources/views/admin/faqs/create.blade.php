@extends('admin.layouts.app')

@section('title', 'Create Faqs')
@section('header-title', 'Create Faqs')

@section('content')
    <x-admin.back-button :route="route('admin.faqs.index')" />
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Create FAQ</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.faqs.store') }}" method="POST">
        @csrf
        <x-admin.text-input name="question" label="Question" required />
        <x-admin.textarea name="answer" label="Answer" />
        <x-admin.text-input name="sort" label="Sort Order" type="number" value="0" />
        <x-admin.checkbox name="is_active" label="Active" value="1" checked />
        <x-admin.submit-button label="Create" />
    </form>
@endsection
