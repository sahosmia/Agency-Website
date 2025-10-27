@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Technology Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $technology->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $technology->name }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $technology->description }}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        @if ($technology->image)
                                            <img src="{{ asset('storage/technologies/' . $technology->image) }}"
                                                alt="{{ $technology->name }}" width="200">
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.technologies.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
