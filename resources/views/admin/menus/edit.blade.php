@extends('admin.layouts.app')

@section('title', 'Edit Menu')

@section('content')
    <h1 class="h3">Edit Menu</h1>

    <form action="{{ route('admin.menus.update', $menu) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.bootstrap.text-input name="name" label="Name" :value="$menu->name" required />
        <x-admin.bootstrap.text-input name="route" label="Route" :value="$menu->route" required />
        <x-admin.bootstrap.text-input name="order" label="Order" :value="$menu->order" required />
        <x-admin.bootstrap.submit-button label="Update" />
    </form>
@endsection
