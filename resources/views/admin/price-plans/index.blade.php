@extends('admin.layouts.app')

@section('title', 'Index Price Plans')
@section('header-title', 'Index Price Plans')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Price Plans</h1>
        <x-admin.create-button :route="route('admin.price-plans.create')" />
    </div>

    <div class="mb-4">
        <form action="{{ route('admin.price-plans.index') }}" method="GET">
            <div class="flex items-center">
                <input type="text" name="q" value="{{ request()->q }}" class="border border-gray-300 rounded-l-md px-4 py-2 w-1/2" placeholder="Search by name...">
                <select name="status" class="border border-gray-300 px-4 py-2 w-1/2">
                    <option value="">All Statuses</option>
                    <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Filter</button>
            </div>
        </form>
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Type</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Planable Type</th>
                <th class="px-4 py-2">Planable Name</th>
                 <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2 w-24">Actions</th>
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
                        <x-admin.status-badge :is-active="$pricePlan->is_active" />
                     </td>
                    <td class="border px-4 py-2">
                        <x-admin.actions-dropdown
                            :editUrl="route('admin.price-plans.edit', $pricePlan)"
                            :deleteRoute="route('admin.price-plans.destroy', $pricePlan)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

<div class="mt-4">
    {{ $pricePlans->appends(request()->query())->links() }}
</div>
@endsection
