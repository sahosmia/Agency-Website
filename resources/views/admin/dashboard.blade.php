@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('header-title', 'Dashboard')



@section('content')
@php
$items = [
[
'title' => 'Services',
'count' => $services,
'route' => 'admin.services.index',
'icon' => '<svg class="w-8 h-8 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
    <path
        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
    </path>
</svg>',
],
[
'title' => 'Projects',
'count' => $projects,
'route' => 'admin.projects.index',
'icon' => '<svg class="w-8 h-8 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
    <path d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
</svg>',
],
[
'title' => 'Articles',
'count' => $articles,
'route' => 'admin.articles.index',
'icon' => '<svg class="w-8 h-8 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
    <path
        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
    </path>
</svg>',
],
[
'title' => 'Clients',
'count' => $clients,
'route' => 'admin.clients.index',
'icon' => '<svg class="w-8 h-8 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
    <path
        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
    </path>
</svg>',
],
[
'title' => 'Teams',
'count' => $teams,
'route' => 'admin.teams.index',
'icon' => '<svg class="w-8 h-8 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
    <path
        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21a6 6 0 00-9-5.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-3-5.197M15 21a2 2 0 01-2-2v-1a2 2 0 012-2h2a2 2 0 012 2v1a2 2 0 01-2 2h-2z">
    </path>
</svg>',
],
[
'title' => 'Vacancies',
'count' => $vacancies,
'route' => 'admin.vacancies.index',
'icon' => '<svg class="w-8 h-8 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
    <path
        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
    </path>
</svg>',
],
];
@endphp

<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($items as $item)
    <a href="{{ route($item['route']) }}"
        class="flex items-center p-6 bg-white border-2 border-gray-200 rounded-lg shadow-sm hover:border-blue-500 hover:shadow-md transition-all duration-200">
        <div class="mr-6">
            {!! $item['icon'] !!}
        </div>
        <div>
            <p class="text-xl font-semibold text-gray-700">{{ $item['title'] }}</p>
            <p class="text-3xl font-bold text-gray-900">{{ $item['count'] }}</p>
        </div>
    </a>
    @endforeach
</div>
@endsection