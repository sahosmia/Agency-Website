@extends('admin.layouts.app')

@section('title', 'Create Key Features')
@section('header-title', 'Create Key Features')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Key Feature</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.key-features.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-admin.bootstrap.text-input name="name" label="Name" required />
                            <x-admin.bootstrap.textarea name="description" label="Description" />
                            <x-admin.bootstrap.file-input name="image" label="Image" />
                            <x-admin.switch-input name="is_active" label="Active" checked />
                            <x-admin.bootstrap.submit-button label="Create" />
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
