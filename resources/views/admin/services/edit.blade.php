@extends('admin.layouts.app')

@section('title', 'Edit Services')
@section('header-title', 'Edit Services')

@section('back-button')
    <x-admin.button outline :route="route('admin.services.index')" text="Back" />
@endsection

@section('content')
<div class="rounded bg-white p-10 w-9/12 mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Service</h1>

    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$service->name" required />
        <x-admin.select name="category_id" label="Category" :options="$categories->pluck('title', 'id')"
            :value="$service->category_id" required />
        <x-admin.textarea name="description" label="Description" :value="$service->description" />
        <x-admin.file-input name="image" label="Image" :value="$service->image" />
        <x-admin.text-input name="meta_title" label="Meta Title" :value="$service->meta_title" />
        <x-admin.textarea name="meta_description" label="Meta Description" :value="$service->meta_description" />
        <x-admin.switch-input name="is_active" label="Active" :value="$service->is_active" />

        <div class="card">
            <div class="card-body">
                <x-admin.faq-repeater :faqs="$service->faqs" />
            </div>
        </div>

        <x-admin.button type="submit" text="Update Service" class="mt-5" />
        <x-admin.button outline :route="route('admin.services.index')" text="Cancel" />
    </form>
</div>

<div class="mt-8">
    <h2 class="text-xl font-bold mb-4">Service Types</h2>
    @foreach ($service->serviceTypes as $serviceType)
    <div class="mb-4 p-4 border rounded-md">
        <h3 class="text-lg font-semibold">{{ $serviceType->name }}</h3>
        <h4 class="text-md font-bold mt-2">Price Plans</h4>
        @if ($serviceType->pricePlans && $serviceType->pricePlans->count() > 0)
        <ul>
            @foreach ($serviceType->pricePlans as $pricePlan)
            <li>{{ $pricePlan->name }} - ${{ $pricePlan->price }}</li>
            @endforeach
        </ul>
        @else
        <p>No price plans for this service type.</p>
        @endif
    </div>
    @endforeach
</div>
@endsection
