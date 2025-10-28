@extends('admin.layouts.app')

@section('title', 'Index Technologies')
@section('header-title', 'Index Technologies')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Technologies</h3>
                        <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary float-right">Create New</a>
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
                                @foreach ($technologies as $technology)
                                    <tr>
                                        <td>{{ $technology->name }}</td>
                                        <td>{{ $technology->description }}</td>
                                        <td>
                                            @if ($technology->image)
                                                <img src="{{ asset('storage/technologies/' . $technology->image) }}" alt="{{ $technology->name }}" width="100">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.technologies.edit', $technology) }}" class="btn btn-info btn-sm">Edit</a>
                                            <x-admin.bootstrap.delete-button :route="route('admin.technologies.destroy', $technology)" />
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
