@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Custom Software Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.custom-software.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $customSoftwareSettings['page_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $customSoftwareSettings['title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="5">{{ $customSoftwareSettings['description'] ?? '' }}</textarea>
                            </div>
                            <hr>
                            <h4>Why Choose Custom Software Section</h4>
                            <div class="form-group">
                                <label for="why_choose_title">Title</label>
                                <input type="text" name="why_choose_title" id="why_choose_title" class="form-control" value="{{ $customSoftwareSettings['why_choose_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="why_choose_description">Description</label>
                                <textarea name="why_choose_description" id="why_choose_description" class="form-control" rows="5">{{ $customSoftwareSettings['why_choose_description'] ?? '' }}</textarea>
                            </div>
                             <hr>
                            <h4>Software Key Features Section</h4>
                             <div class="form-group">
                                <label for="key_features_title">Title</label>
                                <input type="text" name="key_features_title" id="key_features_title" class="form-control" value="{{ $customSoftwareSettings['key_features_title'] ?? '' }}">
                            </div>
                            <hr>
                            <h4>Software Plans Section</h4>
                            <div class="form-group">
                                <label for="plans_title">Title</label>
                                <input type="text" name="plans_title" id="plans_title" class="form-control" value="{{ $customSoftwareSettings['plans_title'] ?? '' }}">
                            </div>
                             <hr>
                            <h4>Technologies Section</h4>
                            <div class="form-group">
                                <label for="technologies_title">Title</label>
                                <input type="text" name="technologies_title" id="technologies_title" class="form-control" value="{{ $customSoftwareSettings['technologies_title'] ?? '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
