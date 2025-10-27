@extends('admin.layouts.app')

@section('title', 'Show')
@section('header-title', 'Show')





@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Key Feature Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $keyFeature->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $keyFeature->name }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $keyFeature->description }}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        @if ($keyFeature->image)
                                            <img src="{{ asset('storage/key_features/' . $keyFeature->image) }}"
                                                alt="{{ $keyFeature->name }}" width="200">
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{ route('admin.key-features.edit', $keyFeature->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.key-features.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
