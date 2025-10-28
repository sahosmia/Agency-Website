@extends('admin.layouts.app')

@section('title', 'Edit Faqs')
@section('header-title', 'Edit Faqs')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit FAQ</h1>
    </div>

    <x-admin.validation-errors />

    <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="question" label="Question" :value="$faq->question" required />
        <x-admin.textarea name="answer" label="Answer" :value="$faq->answer" />
        <x-admin.submit-button label="Update" />
    </form>
@endsection
