@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Project Detail Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.project-detail.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $projectDetailSettings['page_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="client_reviews_title">Client Reviews Title</label>
                                <input type="text" name="client_reviews_title" id="client_reviews_title" class="form-control" value="{{ $projectDetailSettings['client_reviews_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="other_projects_title">Other Projects Title</label>
                                <input type="text" name="other_projects_title" id="other_projects_title" class="form-control" value="{{ $projectDetailSettings['other_projects_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="other_projects_description">Other Projects Description</label>
                                <textarea name="other_projects_description" id="other_projects_description" class="form-control" rows="5">{{ $projectDetailSettings['other_projects_description'] ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
