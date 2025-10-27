@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Software Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.all-softwares.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $allSoftwaresSettings['page_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $allSoftwaresSettings['title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="5">{{ $allSoftwaresSettings['description'] ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="section_title">Section Title</label>
                                <input type="text" name="section_title" id="section_title" class="form-control" value="{{ $allSoftwaresSettings['section_title'] ?? '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
