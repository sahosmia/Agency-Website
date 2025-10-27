@extends('admin.layouts.app')

@section('title', 'Privacy')
@section('header-title', 'Privacy')





@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Privacy Policy Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.privacy.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $privacySettings['page_title'] ?? '' }}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="privacy_title">Title</label>
                                <input type="text" name="privacy_title" id="privacy_title" class="form-control" value="{{ $privacySettings['privacy_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="privacy_content">Content</label>
                                <textarea name="privacy_content" id="privacy_content" class="form-control ckeditor" rows="10">{{ $privacySettings['privacy_content'] ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
