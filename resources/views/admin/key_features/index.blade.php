@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Key Features</h3>
                        <a href="{{ route('admin.key-features.create') }}" class="btn btn-primary">Create Key Feature</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keyFeatures as $keyFeature)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('storage/key_features/' . $keyFeature->image) }}"
                                                alt="{{ $keyFeature->name }}" width="100">
                                        </td>
                                        <td>{{ $keyFeature->name }}</td>
                                        <td>{{ $keyFeature->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.key-features.edit', $keyFeature->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.key-features.destroy', $keyFeature->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
