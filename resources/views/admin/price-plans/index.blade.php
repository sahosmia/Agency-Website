@extends('admin.layouts.app')

@section('title', 'Index Price Plans')
@section('header-title', 'Index Price Plans')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Price Plans</h1>
        <x-admin.create-button :route="route('admin.price-plans.create')" />
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Type</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Planable Type</th>
                <th class="px-4 py-2">Planable Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pricePlans as $pricePlan)
                <tr>
                    <td class="border px-4 py-2">{{ $pricePlan->name }}</td>
                    <td class="border px-4 py-2">{{ $pricePlan->type }}</td>
                    <td class="border px-4 py-2">{{ $pricePlan->price }}</td>
                    <td class="border px-4 py-2">{{ $pricePlan->planable_type }}</td>
                    <td class="border px-4 py-2">{{ $pricePlan->planable->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.price-plans.edit', $pricePlan) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.price-plans.destroy', $pricePlan)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
