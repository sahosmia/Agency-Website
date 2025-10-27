@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Article Detail Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.article-detail.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $articleDetailSettings['page_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="other_articles_title">Other Articles Title</label>
                                <input type="text" name="other_articles_title" id="other_articles_title" class="form-control" value="{{ $articleDetailSettings['other_articles_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="other_articles_description">Other Articles Description</label>
                                <textarea name="other_articles_description" id="other_articles_description" class="form-control" rows="5">{{ $articleDetailSettings['other_articles_description'] ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
