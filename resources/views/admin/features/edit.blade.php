@extends('admin.layouts.app')

@section('title', 'Edit Features')
@section('header-title', 'Edit Features')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Feature</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.features.update', $feature->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-admin.bootstrap.text-input name="name" label="Name" :value="$feature->name" required />
                            <x-admin.bootstrap.textarea name="description" label="Description" :value="$feature->description" />
                            <x-admin.switch-input name="is_active" label="Active" :checked="$feature->is_active" />
                            <x-admin.bootstrap.submit-button label="Update" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
