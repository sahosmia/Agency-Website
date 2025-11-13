@extends('admin.layouts.app')

@section('title', 'Create Client Review')
@section('header-title', 'Create Client Review')



@section('content')
<div class="max-w-5xl mx-auto bg-white rounded-xl shadow-sm border border-gray-100 p-8">
    <div class="mb-8 border-b border-gray-200 pb-4 flex items-center justify-between">
        <h1 class="text-xl font-semibold text-gray-800">Create Client Review</h1>
        <x-admin.button outline :route="route('admin.client-reviews.index')" text="Back" />
    </div>

    <form action="{{ route('admin.client-reviews.store') }}" method="POST" enctype="multipart/form-data"
        class="space-y-6">
        @csrf

        {{-- Basic Info --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-admin.text-input name="name" label="Client Name" required />

            <x-admin.text-input name="designation" label="Designation" required />
        </div>

        {{-- Avatar Upload --}}
        <div class="border border-gray-200 rounded-lg p-4 bg-gray-50/60">
            <x-admin.file-input name="avatar" label="Avatar" />
        </div>

        {{-- Review Info --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-admin.text-input name="rating" label="Rating" required />

            <x-admin.text-input name="sort" label="Sort Order" type="number" value="0" />
        </div>

        <x-admin.textarea name="review" label="Client Review" required />

        {{-- Review Type --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-admin.select name="reviewable_type" label="Review Type" :options="[
                    '' => 'Common',
                    'App\Models\Service' => 'Service',
                    'App\Models\Project' => 'Project',
                    'App\Models\Software' => 'Software'
                ]" />

            <div id="reviewable-items-container" style="display: none;">
                <x-admin.select name="reviewable_id" label="Reviewed Item" :options="[]" />
            </div>
        </div>

        {{-- Status & Actions --}}
        <div class="flex items-center justify-between border-t border-gray-100 pt-6">
            <x-admin.switch-input name="is_active" label="Active Status" checked />

            <div class="flex gap-3">
                <x-admin.button type="submit" text="Create Review" class="px-6 py-2" />
                <x-admin.button outline :route="route('admin.client-reviews.index')" text="Cancel" />
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const reviewableType = document.querySelector('[name="reviewable_type"]');
        const reviewableItemsContainer = document.getElementById('reviewable-items-container');
        const reviewableId = document.querySelector('[name="reviewable_id"]');

        const services = @json($services);
        const projects = @json($projects);
        const softwares = @json($softwares);

        function updateReviewableItems() {
            const type = reviewableType.value;
            let options = [];

            if (type === 'App\\Models\\Service') {
                options = Object.entries(services).map(([id, name]) => ({ id, name }));
            } else if (type === 'App\\Models\\Project') {
                options = Object.entries(projects).map(([id, name]) => ({ id, name }));
            } else if (type === 'App\\Models\\Software') {
                options = Object.entries(softwares).map(([id, name]) => ({ id, name }));
            }

            reviewableId.innerHTML = '';
            options.forEach(option => {
                const el = document.createElement('option');
                el.value = option.id;
                el.textContent = option.name;
                reviewableId.appendChild(el);
            });

            reviewableItemsContainer.style.display = options.length > 0 ? 'block' : 'none';
        }

        reviewableType.addEventListener('change', updateReviewableItems);
        updateReviewableItems();
    });
</script>
@endpush