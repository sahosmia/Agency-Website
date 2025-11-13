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
                        <x-admin.table>
                            <x-slot name="head">
                                <tr>
                                    <th class="px-5 py-3 text-left font-medium text-gray-600">Name</th>
                                    <th class="px-5 py-3 text-left font-medium text-gray-600">Description</th>
                                    <th class="px-5 py-3 text-center font-medium text-gray-600">Status</th>
                                    <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
                                </tr>
                            </x-slot>
                            <x-slot name="body">
                                @foreach ($technologies as $technology)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-5 py-3">
                                            <x-admin.image-title :name="$technology->name" :imagePath="$technology->image ? asset('storage/technologies/' . $technology->image) : ''" />
                                        </td>
                                        <td class="px-5 py-3">{{ $technology->description }}</td>
                                        <td class="px-5 py-3 text-center">
                                            <x-admin.status-badge :is-active="$technology->is_active" />
                                        </td>
                                        <td class="px-5 py-3 text-right">
                                            <x-admin.actions-dropdown
                                                :editUrl="route('admin.technologies.edit', $technology)"
                                                :deleteRoute="route('admin.technologies.destroy', $technology)"
                                            />
                                        </td>
                                    </tr>
                                @endforeach
                            </x-slot>
                        </x-admin.table>
                        <div class="mt-4">
                            {{ $technologies->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
