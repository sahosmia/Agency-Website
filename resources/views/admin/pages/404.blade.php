@extends('admin.layouts.app')

@section('title', '404')
@section('header-title', '404')





@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">404 Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.404.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $notFoundSettings['page_title'] ?? '' }}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="404_title">Title</label>
                                <input type="text" name="404_title" id="404_title" class="form-control" value="{{ $notFoundSettings['404_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="404_description">Description</label>
                                <textarea name="404_description" id="404_description" class="form-control" rows="5">{{ $notFoundSettings['404_description'] ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="404_image">Image</label>
                                <input type="file" name="404_image" id="404_image" class="form-control">
                                @if(isset($notFoundSettings['404_image']))
                                    <img src="{{ asset('storage/' . $notFoundSettings['404_image']) }}" alt="404 Image" class="img-thumbnail mt-2" width="200">
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
