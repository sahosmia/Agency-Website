@extends('admin.layouts.app')

@section('title', 'Edit Faqs')
@section('header-title', 'Edit Faqs')

@section('content')
<x-admin.back-button :route="route('admin.page-faqs.index')" />
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Edit FAQ</h1>
</div>

<x-admin.validation-errors />

<form action="{{ route('admin.page-faqs.update', $faq) }}" method="POST">
    @csrf
    @method('PUT')
    <x-admin.select name="page" label="Page" :options="array_combine($pages, array_map('ucfirst', $pages))"
        :value="$faq->page" required />
    <x-admin.text-input name="question" label="Question" :value="$faq->question" required />
    <x-admin.textarea name="answer" label="Answer" :value="$faq->answer" />
    <x-admin.text-input name="sort" label="Sort Order" type="number" :value="$faq->sort" />
    <x-admin.checkbox name="is_active" label="Active" value="1" :checked="$faq->is_active" />
    <x-admin.submit-button label="Update" />
</form>
@endsection