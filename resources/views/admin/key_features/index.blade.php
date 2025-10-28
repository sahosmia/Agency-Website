@extends('admin.layouts.app')

@section('title', 'Index Key Features')
@section('header-title', 'Index Key Features')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Key Features</h3>
                        <x-admin.create-button :route="route('admin.key-features.create')" class="btn btn-primary float-right" />
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keyFeatures as $keyFeature)
                                    <tr>
                                        <td>{{ $keyFeature->name }}</td>
                                        <td>{{ $keyFeature->description }}</td>
                                        <td>
                                            @if ($keyFeature->image)
                                                <img src="{{ asset('storage/key_features/' . $keyFeature->image) }}" alt="{{ $keyFeature->name }}" width="100">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.key-features.edit', $keyFeature) }}" class="btn btn-info btn-sm">Edit</a>
                                            <x-admin.bootstrap.delete-button :route="route('admin.key-features.destroy', $keyFeature)" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
