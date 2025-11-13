@extends('admin.layouts.app')

@section('title', 'Create Features')
@section('header-title', 'Create Features')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Feature</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.features.store') }}" method="POST">
                            @csrf
                            <x-admin.bootstrap.text-input name="name" label="Name" required />
                            <x-admin.bootstrap.textarea name="description" label="Description" />
                            <x-admin.switch-input name="is_active" label="Active" checked />
                            <x-admin.bootstrap.submit-button label="Create" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
