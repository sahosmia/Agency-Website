@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contact Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.contact.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $contactSettings['page_title'] ?? '' }}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="contact_title">Title</label>
                                <input type="text" name="contact_title" id="contact_title" class="form-control" value="{{ $contactSettings['contact_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="contact_description">Description</label>
                                <textarea name="contact_description" id="contact_description" class="form-control" rows="5">{{ $contactSettings['contact_description'] ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="contact_email">Email</label>
                                <input type="email" name="contact_email" id="contact_email" class="form-control" value="{{ $contactSettings['contact_email'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="contact_phone">Phone</label>
                                <input type="text" name="contact_phone" id="contact_phone" class="form-control" value="{{ $contactSettings['contact_phone'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="contact_address">Address</label>
                                <input type="text" name="contact_address" id="contact_address" class="form-control" value="{{ $contactSettings['contact_address'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="contact_map_iframe_url">Map Iframe URL</label>
                                <textarea name="contact_map_iframe_url" id="contact_map_iframe_url" class="form-control" rows="5">{{ $contactSettings['contact_map_iframe_url'] ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
