@extends('admin.layouts.app')

@section('title', 'Header Settings')

@section('content')
    <h1 class="h3">Header Settings</h1>

    <form action="{{ route('admin.pages.header.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                    @if (isset($headerSettings['logo']))
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $headerSettings['logo']) }}" alt="Logo" width="150">
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
