@extends('admin.layouts.app')

@section('title', 'Create Testimonial')
@section('header-title', 'Create Testimonial')
@section('breadcrumbs')
    <div class="breadcrumb-item"><a href="{{ route('admin.client-reviews.index') }}">Testimonials</a></div>
    <div class="breadcrumb-item">Create</div>
@endsection

@section('content')
    <x-admin.back-button :route="route('admin.client-reviews.index')" />
    <h1 class="text-2xl font-bold mb-4">Create Testimonial</h1>

    <form action="{{ route('admin.client-reviews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.text-input name="name" label="Name" required />
        <x-admin.text-input name="designation" label="Designation" required />
        <x-admin.file-input name="avatar" label="Avatar" />
        <x-admin.text-input name="rating" label="Rating" required />
        <x-admin.textarea name="review" label="Review" required />
        <x-admin.select-input name="reviewable_type" label="Review Type" :options="['' => 'Common', 'App\Models\Service' => 'Service', 'App\Models\Project' => 'Project', 'App\Models\Software' => 'Software']" />

        <div id="reviewable-items-container" style="display: none;">
            <x-admin.select-input name="reviewable_id" label="Reviewed Item" :options="[]" />
        </div>

        <x-admin.text-input name="sort" label="Sort Order" type="number" value="0" />
        <x-admin.switch-input name="is_active" label="Active" checked />

        <x-admin.submit-button label="Create" />
    </form>
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
                    const optionElement = document.createElement('option');
                    optionElement.value = option.id;
                    optionElement.textContent = option.name;
                    reviewableId.appendChild(optionElement);
                });

                reviewableItemsContainer.style.display = options.length > 0 ? 'block' : 'none';
            }

            reviewableType.addEventListener('change', updateReviewableItems);
            updateReviewableItems();
        });
    </script>
@endpush
