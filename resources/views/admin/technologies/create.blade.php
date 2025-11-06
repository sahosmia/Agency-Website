@extends('admin.layouts.app')

@section('title', 'Create Technologies')
@section('header-title', 'Create Technologies')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Technology</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.technologies.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-admin.bootstrap.text-input name="name" label="Name" required />
                            <x-admin.bootstrap.textarea name="description" label="Description" />
                            <x-admin.bootstrap.file-input name="image" label="Image" />
                            <x-admin.bootstrap.checkbox-input name="is_active" label="Active" checked />
                            <x-admin.bootstrap.submit-button label="Create" />
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
