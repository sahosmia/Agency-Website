@extends('admin.layouts.app')

@section('title', 'Menus')

@section('content')
    <h1 class="h3">Menus</h1>

    <a href="{{ route('admin.menus.create') }}" class="btn btn-primary mb-3">Create Menu</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Route</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->route }}</td>
                    <td>{{ $menu->order }}</td>
                    <td>
                        <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-primary">Edit</a>
                        <x-admin.bootstrap.delete-button :route="route('admin.menus.destroy', $menu)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
