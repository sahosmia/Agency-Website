@extends('frontend.layouts.app')
@section('title', $privacySettings['page_title'] ?? 'Privacy Policy')

@section('content')
    <div class="container">
        <div class="w-full md:w-8/12 m-auto pt-20 max-md:px-4">
            <h1 class="heading-text-bold-large text-secondary-950 text-center">{{ $privacySettings['privacy_title'] ?? '' }}</h1>
            <div class="prose lg:prose-xl max-w-none mt-8">
                {!! $privacySettings['privacy_content'] ?? '' !!}
            </div>
        </div>
    </div>

@endsection
