@extends('admin.layouts.app')

@section('title', 'Create Menu')

@section('content')
    <h1 class="h3">Create Menu</h1>

    <form action="{{ route('admin.menus.store') }}" method="POST">
        @csrf
        <x-admin.bootstrap.text-input name="name" label="Name" required />
        <x-admin.bootstrap.text-input name="route" label="Route" required />
        <x-admin.bootstrap.text-input name="order" label="Order" value="0" required />
        <x-admin.bootstrap.submit-button label="Create" />
    </form>
@endsection
