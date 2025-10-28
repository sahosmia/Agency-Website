@extends('admin.layouts.app')

@section('title', 'Create Menu')

@section('content')
    <h1 class="h3">Create Menu</h1>

    <form action="{{ route('admin.menus.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="route" class="form-label">Route</label>
            <input type="text" class="form-control" id="route" name="route" required>
        </div>
        <div class="mb-3">
            <label for="order" class="form-label">Order</label>
            <input type="number" class="form-control" id="order" name="order" value="0" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
