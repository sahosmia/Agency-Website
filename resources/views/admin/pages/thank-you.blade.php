@extends('admin.layouts.app')

@section('title', 'Thank You')
@section('header-title', 'Thank You')





@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Thank You Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.thank-you.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $thankYouSettings['page_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $thankYouSettings['title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ $thankYouSettings['subtitle'] ?? '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
