@extends('admin.layouts.app')

@section('title', 'Terms')
@section('header-title', 'Terms')





@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Terms & Conditions Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.terms.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $termsSettings['page_title'] ?? '' }}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="terms_title">Title</label>
                                <input type="text" name="terms_title" id="terms_title" class="form-control" value="{{ $termsSettings['terms_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="terms_content">Content</label>
                                <textarea name="terms_content" id="terms_content" class="form-control ckeditor" rows="10">{{ $termsSettings['terms_content'] ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
