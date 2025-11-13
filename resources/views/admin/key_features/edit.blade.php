@extends('admin.layouts.app')

@section('title', 'Edit Key Features')
@section('header-title', 'Edit Key Features')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Key Feature</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.key-features.update', $keyFeature->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <x-admin.bootstrap.text-input name="name" label="Name" :value="$keyFeature->name" required />
                            <x-admin.bootstrap.textarea name="description" label="Description" :value="$keyFeature->description" />
                            <x-admin.bootstrap.file-input name="image" label="Image" :value="$keyFeature->image" />
                            <x-admin.switch-input name="is_active" label="Active" :checked="$keyFeature->is_active" />
                            <x-admin.bootstrap.submit-button label="Update" />
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
