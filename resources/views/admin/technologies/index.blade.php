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
                        <x-admin.create-button :route="route('admin.technologies.create')" class="btn btn-primary float-right" />
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <form action="{{ route('admin.technologies.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="q" value="{{ request()->q }}" class="form-control" placeholder="Search by name...">
                                    <select name="status" class="form-control">
                                        <option value="">All Statuses</option>
                                        <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                     <th>Status</th>
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
                                            <x-admin.bootstrap.status-badge :is-active="$technology->is_active" />
                                        </td>
                                        <td>
                                            <x-admin.bootstrap.actions-dropdown
                                                :editUrl="route('admin.technologies.edit', $technology)"
                                                :deleteRoute="route('admin.technologies.destroy', $technology)"
                                            />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $technologies->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
