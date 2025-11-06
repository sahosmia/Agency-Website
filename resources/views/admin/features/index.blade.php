@extends('admin.layouts.app')

@section('title', 'Index Features')
@section('header-title', 'Index Features')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Features</h3>
                        <x-admin.create-button :route="route('admin.features.create')" class="btn btn-primary float-right" />
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($features as $feature)
                                    <tr>
                                        <td>{{ $feature->name }}</td>
                                        <td>{{ $feature->description }}</td>
                                        <td>
                                            <x-admin.bootstrap.status-badge :is-active="$feature->is_active" />
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.features.edit', $feature) }}" class="btn btn-info btn-sm">Edit</a>
                                            <x-admin.bootstrap.delete-button :route="route('admin.features.destroy', $feature)" />
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
