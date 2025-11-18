@extends('admin.layouts.app')

@section('title', $pageTitle . ' Settings')

@section('header-title', $pageTitle . ' Settings')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="mb-8 border-b border-gray-200 pb-4">
        <h1 class="text-xl font-semibold text-gray-800">Manage {{ $pageTitle }} Settings</h1>
        <p class="text-sm text-gray-500 mt-1">Update the settings for different sections of the {{ strtolower($pageTitle) }} page.</p>
    </div>

    <div class="space-y-10">
        @forelse ($sections as $sectionKey => $section)
            <div id="{{ $sectionKey }}" class="bg-white rounded-xl shadow-sm border border-gray-100">
                <form action="{{ route('admin.pages.update-section', ['pageName' => $pageName, 'sectionKey' => $sectionKey]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="p-8 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-800">{{ $section['title'] }}</h2>
                        <p class="text-sm text-gray-500 mt-1">Manage the content and visibility of this section.</p>
                    </div>

                    <div class="p-8">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            @foreach ($section['fields'] as $field)
                                @php
                                    $fieldName = $field['name'];
                                    $fieldValue = old($fieldName, $settings[$fieldName] ?? '');
                                    $fieldLabel = $field['label'];
                                    $fieldType = $field['type'];
                                @endphp

                                <div class="{{ ($fieldType === 'textarea' || $fieldType === 'ckeditor') ? 'sm:col-span-2' : '' }}">
                                    @switch($fieldType)
                                        @case('textarea')
                                            <x-admin.textarea :name="$fieldName" :label="$fieldLabel" :value="$fieldValue" />
                                            @break
                                        @case('ckeditor')
                                            <x-admin.ckeditor :name="$fieldName" :label="$fieldLabel" :value="$fieldValue" />
                                            @break
                                        @case('image')
                                            <div class="border border-gray-200 rounded-lg p-4 bg-gray-50/60">
                                                <x-admin.file-input :name="$fieldName" :label="$fieldLabel" />
                                                @if (!empty($settings[$fieldName]))
                                                    <p class="text-sm text-gray-500 mt-3">Current Image:</p>
                                                    <img src="{{ asset('storage/' . $settings[$fieldName]) }}" alt="{{ $fieldLabel }}" class="mt-2 rounded-md max-h-40">
                                                @endif
                                            </div>
                                            @break
                                        @case('checkbox')
                                            <x-admin.switch-input :name="$fieldName" :label="$fieldLabel" :checked="old($fieldName, $settings[$fieldName] ?? false)" />
                                            @break
                                        @default
                                            <x-admin.text-input :type="$fieldType" :name="$fieldName" :label="$fieldLabel" :value="$fieldValue" />
                                    @endswitch
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-center justify-end p-6 bg-gray-50 border-t border-gray-100 rounded-b-xl">
                        <x-admin.button type="submit" text="Save Changes" />
                    </div>
                </form>
            </div>
        @empty
            <div class="text-center py-12 bg-white rounded-xl shadow-sm border border-gray-100">
                <p class="text-gray-600">No setting sections have been configured for this page.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection