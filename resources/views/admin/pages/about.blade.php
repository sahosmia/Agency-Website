@extends('admin.layouts.app')

@section('title', 'About')
@section('header-title', 'About')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">About Us Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.about.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-admin.bootstrap.text-input name="page_title" label="Page Title" :value="$aboutSettings['page_title'] ?? ''" />
                            <hr>
                            <x-admin.bootstrap.text-input name="about_us_title" label="Title" :value="$aboutSettings['about_us_title'] ?? ''" />
                            <x-admin.bootstrap.textarea name="about_us_description" label="Description" :value="$aboutSettings['about_us_description'] ?? ''" />
                            <x-admin.bootstrap.file-input name="about_us_image" label="Image" :value="$aboutSettings['about_us_image'] ?? ''" />
                            <hr>
                            <h4>Achievements</h4>
                            <x-admin.bootstrap.text-input name="achievement_title" label="Achievement Title" :value="$aboutSettings['achievement_title'] ?? ''" />
                            <x-admin.bootstrap.text-input name="achievement_description" label="Achievement Description" :value="$aboutSettings['achievement_description'] ?? ''" />
                            <div class="row">
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="achievement_one_title" label="Achievement 1 Title" :value="$aboutSettings['achievement_one_title'] ?? ''" />
                                </div>
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="achievement_one_value" label="Achievement 1 Value" :value="$aboutSettings['achievement_one_value'] ?? ''" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="achievement_two_title" label="Achievement 2 Title" :value="$aboutSettings['achievement_two_title'] ?? ''" />
                                </div>
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="achievement_two_value" label="Achievement 2 Value" :value="$aboutSettings['achievement_two_value'] ?? ''" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="achievement_three_title" label="Achievement 3 Title" :value="$aboutSettings['achievement_three_title'] ?? ''" />
                                </div>
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="achievement_three_value" label="Achievement 3 Value" :value="$aboutSettings['achievement_three_value'] ?? ''" />
                                </div>
                            </div>
                            <hr>
                            <h4>Journey</h4>
                            <x-admin.bootstrap.text-input name="journey_title" label="Journey Title" :value="$aboutSettings['journey_title'] ?? ''" />
                            <x-admin.bootstrap.text-input name="journey_description" label="Journey Description" :value="$aboutSettings['journey_description'] ?? ''" />
                            <div class="row">
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="journey_one_title" label="Journey 1 Title" :value="$aboutSettings['journey_one_title'] ?? ''" />
                                </div>
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="journey_one_description" label="Journey 1 Description" :value="$aboutSettings['journey_one_description'] ?? ''" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="journey_two_title" label="Journey 2 Title" :value="$aboutSettings['journey_two_title'] ?? ''" />
                                </div>
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="journey_two_description" label="Journey 2 Description" :value="$aboutSettings['journey_two_description'] ?? ''" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="journey_three_title" label="Journey 3 Title" :value="$aboutSettings['journey_three_title'] ?? ''" />
                                </div>
                                <div class="col-md-6">
                                    <x-admin.bootstrap.text-input name="journey_three_description" label="Journey 3 Description" :value="$aboutSettings['journey_three_description'] ?? ''" />
                                </div>
                            </div>
                            <hr>
                            <h4>Our Team</h4>
                            <x-admin.bootstrap.text-input name="team_title" label="Team Title" :value="$aboutSettings['team_title'] ?? ''" />
                            <x-admin.bootstrap.submit-button label="Update Settings" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
