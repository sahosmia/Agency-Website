@extends('admin.layouts.app')

@section('title', 'Menus')
@section('header-title', 'Menus')

@section('back-button')
<x-admin.button :route="route('admin.menus.create')" text="Create Menu" />
@endsection

@section('content')
<x-admin.status-message />

{{-- Table --}}
<div class="bg-white border border-gray-100 shadow-sm rounded-xl overflow-hidden">
    <table class="w-full text-sm text-gray-700">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Name</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Route</th>
                <th class="px-5 py-3 text-center font-medium text-gray-600">Order</th>
                <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse ($menus as $menu)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-5 py-3 font-medium">{{ $menu->name }}</td>
                <td class="px-5 py-3">{{ $menu->route }}</td>
                <td class="px-5 py-3 text-center">{{ $menu->order }}</td>
                <td class="px-5 py-3 text-right">
                    <x-admin.actions-dropdown :editUrl="route('admin.menus.edit', $menu)"
                        :deleteRoute="route('admin.menus.destroy', $menu)" />
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-5 py-6 text-center text-gray-500">
                    No menus found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination (Assuming you don't need pagination here, but added if $menus is a paginator) --}}
@if (method_exists($menus, 'links'))
<div class="mt-6">
    {{ $menus->appends(request()->query())->links() }}
</div>
@endif

@endsection
