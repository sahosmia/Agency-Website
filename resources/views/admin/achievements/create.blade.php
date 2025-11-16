

@extends('admin.layouts.app')

@section('title', 'Create Achievement')
@section('header-title', 'Create Achievement')



@section('content')
<div class="max-w-5xl mx-auto bg-white rounded-xl shadow-sm border border-gray-100 p-8">
    <div class="mb-8 border-b border-gray-200 pb-4 flex items-center justify-between">
        <h1 class="text-xl font-semibold text-gray-800">Create Achievement</h1>
        <x-admin.button outline :route="route('admin.achievements.index')" text="Back" />
    </div>

    <form action="{{ route('admin.achievements.store',) }}" method="POST" enctype="multipart/form-data"
        class="space-y-6">
        @csrf

        {{-- Basic Info --}}
        <div class="grid grid-cols-1 ">
            {{-- title --}}
            <x-admin.text-input name="title" label="Title" required />


        </div>



        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

            {{-- value --}}
            <x-admin.text-input name="value" label="Value" required />
            <x-admin.text-input name="sort" label="Sort Order" type="number" />
        </div>

        {{-- description --}}
        <x-admin.textarea name="description" label="Description" required />




        {{-- Status Switch --}}
        <div class="flex items-center justify-between border-t border-gray-100 pt-6">
            <x-admin.switch-input name="home_page_show" label="Show on Home Page" />

            <div class="flex gap-3">
                <x-admin.button type="submit" text="Create Achievement" class="px-6 py-2" />
                <x-admin.button outline :route="route('admin.achievements.index')" text="Cancel" />
            </div>
        </div>
    </form>
</div>
@endsection
