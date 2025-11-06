@extends('admin.layouts.app')

@section('title', 'Edit Technologies')
@section('header-title', 'Edit Technologies')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Technology</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <x-admin.bootstrap.text-input name="name" label="Name" :value="$technology->name" required />
                            <x-admin.bootstrap.textarea name="description" label="Description" :value="$technology->description" />
                            <x-admin.bootstrap.file-input name="image" label="Image" :value="$technology->image" />
                            <x-admin.bootstrap.checkbox-input name="is_active" label="Active" :value="$technology->is_active" />
                            <x-admin.bootstrap.submit-button label="Update" />
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
