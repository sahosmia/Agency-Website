@extends('admin.layouts.app')

@section('title', 'Software Detail')
@section('header-title', 'Software Detail')





@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Software Detail Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.software-detail.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $softwareDetailSettings['page_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="key_features_title">Key Features Title</label>
                                <input type="text" name="key_features_title" id="key_features_title" class="form-control" value="{{ $softwareDetailSettings['key_features_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="technologies_title">Technologies Title</label>
                                <input type="text" name="technologies_title" id="technologies_title" class="form-control" value="{{ $softwareDetailSettings['technologies_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="software_plans_title">Software Plans Title</label>
                                <input type="text" name="software_plans_title" id="software_plans_title" class="form-control" value="{{ $softwareDetailSettings['software_plans_title'] ?? '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
