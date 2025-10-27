@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Service Detail Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.service-detail.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $serviceDetailSettings['page_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="key_features_title">Key Features Title</label>
                                <input type="text" name="key_features_title" id="key_features_title" class="form-control" value="{{ $serviceDetailSettings['key_features_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="technologies_title">Technologies Title</label>
                                <input type="text" name="technologies_title" id="technologies_title" class="form-control" value="{{ $serviceDetailSettings['technologies_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="service_plans_title">Service Plans Title</label>
                                <input type="text" name="service_plans_title" id="service_plans_title" class="form-control" value="{{ $serviceDetailSettings['service_plans_title'] ?? '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
