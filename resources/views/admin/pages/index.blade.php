@extends('admin.layouts.app')

@section('title', $pageTitle)
{{-- No need for a separate header-title, as it's included inside the form container --}}


@section('content')
<div class="max-w-6xl mx-auto bg-white rounded-xl shadow-sm border border-gray-100 p-8">
    {{-- Page Header --}}
    <div class="mb-8 border-b border-gray-200 pb-4 flex items-center justify-between">
        <h1 class="text-xl font-semibold text-gray-800">{{ $pageTitle }} Settings</h1>
        {{-- You can add a 'Back' button here if needed --}}
        {{--
        <x-admin.button outline :route="route('admin.pages.index')" text="Back" /> --}}
    </div>

    {{-- Settings Form --}}
    <form action="{{ route('admin.pages.update', $pageName) }}" method="POST" enctype="multipart/form-data"
        class="space-y-6">
        @csrf
        @method('PUT') {{-- Using PUT/PATCH for updating settings is RESTful --}}

        {{-- Text and General Fields --}}
        <div class="space-y-6">
            <h2 class="text-lg font-medium text-gray-700">General Information</h2>

            {{-- Dynamic Text/Textarea Fields --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                @foreach ($fields['text_fields'] as $field => $rules)
                {{-- Check if the field requires a rich editor or textarea --}}
                @if ($field === 'terms_content' || $field === 'privacy_content' || in_array($field,
                $fields['textarea_fields'] ?? []))
                <div class="col-span-1 sm:col-span-2"> {{-- Spanning full width for content fields --}}
                    @if ($field === 'terms_content' || $field === 'privacy_content')
                    <x-admin.ckeditor name="{{ $field }}" label="{{ Str::of($field)->replace('_', ' ')->title() }}"
                        :value="old($field, $settings[$field] ?? '')" />
                    @else
                    <x-admin.textarea name="{{ $field }}" label="{{ Str::of($field)->replace('_', ' ')->title() }}"
                        :value="old($field, $settings[$field] ?? '')" />
                    @endif
                </div>
                @else
                {{-- Regular Text Input --}}
                <x-admin.text-input name="{{ $field }}" label="{{ Str::of($field)->replace('_', ' ')->title() }}"
                    :value="old($field, $settings[$field] ?? '')" />
                @endif
                @endforeach

                {{-- Item Limit Field --}}
                <x-admin.text-input name="item_limit" label="Item Limit" type="number"
                    :value="old('item_limit', $settings['item_limit'] ?? 8)" />
            </div>
        </div>

        {{-- Image Fields --}}
        @if (!empty($fields['image_fields']))
        <div class="border-t border-gray-100 pt-6 space-y-6">
            <h2 class="text-lg font-medium text-gray-700">Images/Media</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                @foreach ($fields['image_fields'] as $field => $rules)
                <div class="border border-gray-200 rounded-lg p-4 bg-gray-50/60">
                    <x-admin.file-input name="{{ $field }}" label="{{ Str::of($field)->replace('_', ' ')->title() }}" />

                    @if (isset($settings[$field]))
                    <p class="text-sm text-gray-500 mt-2">Current Image:</p>
                    <img src="{{ asset('storage/' . $settings[$field]) }}" alt="{{ $field }}"
                        class="mt-2 rounded-md max-w-xs" style="max-height: 200px;">
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        @endif


        {{-- Checkbox Fields / Section Visibility --}}
        @if (!empty($fields['checkbox_fields']))
        <div class="border-t border-gray-100 pt-6 space-y-6">
            <h2 class="text-lg font-medium text-gray-700">Section Visibility</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                @foreach ($fields['checkbox_fields'] as $field => $rules)
                {{-- Assuming the switch component handles the value and checked state --}}
                <x-admin.switch-input name="{{ $field }}"
                    label="{{ Str::of($field)->replace('_is_active', '')->replace('_', ' ')->title() }}"
                    :checked="old($field, $settings[$field] ?? false)" />
                @endforeach
            </div>
        </div>
        @endif


        {{-- Actions --}}
        <div class="flex items-center justify-end border-t border-gray-100 pt-6">
            <x-admin.button type="submit" text="Update Settings" class="px-6 py-2" />
        </div>
    </form>
</div>
@endsection