@extends('admin.layouts.app')

@section('title', 'Index Applicants')
@section('header-title', 'Index Applicants')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Applicants</h1>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Applied For</th>
                    <th class="px-4 py-2">Experience</th>
                    <th class="px-4 py-2">Why Hire</th>
                    <th class="px-4 py-2 w-24">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applicants as $applicant)
                    <tr>
                        <td class="border px-4 py-2">{{ $applicant->name }}</td>
                        <td class="border px-4 py-2">{{ $applicant->email }}</td>
                        <td class="border px-4 py-2">{{ $applicant->vacancy->title }}</td>
                        <td class="border px-4 py-2">{{ $applicant->experience }}</td>
                        <td class="border px-4 py-2">{{ $applicant->why_hire }}</td>
                        <td class="border px-4 py-2">
                            <x-admin.actions-dropdown
                                :deleteRoute="route('admin.applicants.destroy', $applicant)"
                            />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
