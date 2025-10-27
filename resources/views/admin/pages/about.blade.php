@extends('admin.layouts.app')

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
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $aboutSettings['page_title'] ?? '' }}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="about_us_title">Title</label>
                                <input type="text" name="about_us_title" id="about_us_title" class="form-control" value="{{ $aboutSettings['about_us_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="about_us_description">Description</label>
                                <textarea name="about_us_description" id="about_us_description" class="form-control" rows="5">{{ $aboutSettings['about_us_description'] ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="about_us_image">Image</label>
                                <input type="file" name="about_us_image" id="about_us_image" class="form-control">
                                @if(isset($aboutSettings['about_us_image']))
                                    <img src="{{ asset('storage/' . $aboutSettings['about_us_image']) }}" alt="About Us Image" class="img-thumbnail mt-2" width="200">
                                @endif
                            </div>
                            <hr>
                            <h4>Achievements</h4>
                            <div class="form-group">
                                <label for="achievement_title">Achievement Title</label>
                                <input type="text" name="achievement_title" id="achievement_title" class="form-control" value="{{ $aboutSettings['achievement_title'] ?? '' }}">
                            </div>
                             <div class="form-group">
                                <label for="achievement_description">Achievement Description</label>
                                <input type="text" name="achievement_description" id="achievement_description" class="form-control" value="{{ $aboutSettings['achievement_description'] ?? '' }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="achievement_one_title">Achievement 1 Title</label>
                                        <input type="text" name="achievement_one_title" id="achievement_one_title" class="form-control" value="{{ $aboutSettings['achievement_one_title'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="achievement_one_value">Achievement 1 Value</label>
                                        <input type="text" name="achievement_one_value" id="achievement_one_value" class="form-control" value="{{ $aboutSettings['achievement_one_value'] ?? '' }}">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="achievement_two_title">Achievement 2 Title</label>
                                        <input type="text" name="achievement_two_title" id="achievement_two_title" class="form-control" value="{{ $aboutSettings['achievement_two_title'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="achievement_two_value">Achievement 2 Value</label>
                                        <input type="text" name="achievement_two_value" id="achievement_two_value" class="form-control" value="{{ $aboutSettings['achievement_two_value'] ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="achievement_three_title">Achievement 3 Title</label>
                                        <input type="text" name="achievement_three_title" id="achievement_three_title" class="form-control" value="{{ $aboutSettings['achievement_three_title'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="achievement_three_value">Achievement 3 Value</label>
                                        <input type="text" name="achievement_three_value" id="achievement_three_value" class="form-control" value="{{ $aboutSettings['achievement_three_value'] ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4>Journey</h4>
                            <div class="form-group">
                                <label for="journey_title">Journey Title</label>
                                <input type="text" name="journey_title" id="journey_title" class="form-control" value="{{ $aboutSettings['journey_title'] ?? '' }}">
                            </div>
                             <div class="form-group">
                                <label for="journey_description">Journey Description</label>
                                <input type="text" name="journey_description" id="journey_description" class="form-control" value="{{ $aboutSettings['journey_description'] ?? '' }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="journey_one_title">Journey 1 Title</label>
                                        <input type="text" name="journey_one_title" id="journey_one_title" class="form-control" value="{{ $aboutSettings['journey_one_title'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="journey_one_description">Journey 1 Description</label>
                                        <input type="text" name="journey_one_description" id="journey_one_description" class="form-control" value="{{ $aboutSettings['journey_one_description'] ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="journey_two_title">Journey 2 Title</label>
                                        <input type="text" name="journey_two_title" id="journey_two_title" class="form-control" value="{{ $aboutSettings['journey_two_title'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="journey_two_description">Journey 2 Description</label>
                                        <input type="text" name="journey_two_description" id="journey_two_description" class="form-control" value="{{ $aboutSettings['journey_two_description'] ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="journey_three_title">Journey 3 Title</label>
                                        <input type="text" name="journey_three_title" id="journey_three_title" class="form-control" value="{{ $aboutSettings['journey_three_title'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="journey_three_description">Journey 3 Description</label>
                                        <input type="text" name="journey_three_description" id="journey_three_description" class="form-control" value="{{ $aboutSettings['journey_three_description'] ?? '' }}">
                                    </div>
                                </div>
                            </div>
                             <hr>
                            <h4>Our Team</h4>
                             <div class="form-group">
                                <label for="team_title">Team Title</label>
                                <input type="text" name="team_title" id="team_title" class="form-control" value="{{ $aboutSettings['team_title'] ?? '' }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
