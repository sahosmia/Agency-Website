@extends('admin.layouts.app')

@section('title', 'Edit Menu')

@section('content')
    <h1 class="h3">Edit Menu</h1>

    <form action="{{ route('admin.menus.update', $menu) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}" required>
        </div>
        <div class="mb-3">
            <label for="route" class="form-label">Route</label>
            <input type="text" class="form-control" id="route" name="route" value="{{ $menu->route }}" required>
        </div>
        <div class="mb-3">
            <label for="order" class="form-label">Order</label>
            <input type="number" class="form-control" id="order" name="order" value="{{ $menu->order }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
