@extends('frontend.layouts.app')
@section('title', $termsSettings['page_title'] ?? 'Terms & Conditions')

@section('content')
    <div class="container">
        <div class="w-full md:w-8/12 m-auto pt-20 max-md:px-4">
            <h1 class="heading-text-bold-large text-secondary-950 text-center">{{ $termsSettings['terms_title'] ?? '' }}</h1>
            <div class="prose lg:prose-xl max-w-none mt-8">
                {!! $termsSettings['terms_content'] ?? '' !!}
            </div>
        </div>
    </div>

@endsection
