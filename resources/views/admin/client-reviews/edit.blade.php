@extends('admin.layouts.app')

@section('title', 'Edit Testimonial')
@section('header-title', 'Edit Testimonial')
@section('breadcrumbs')
    <div class="breadcrumb-item"><a href="{{ route('admin.client-reviews.index') }}">Testimonials</a></div>
    <div class="breadcrumb-item">Edit</div>
@endsection

@section('content')
    <x-admin.back-button :route="route('admin.client-reviews.index')" />
    <h1 class="text-2xl font-bold mb-4">Edit Testimonial</h1>

    <form action="{{ route('admin.client-reviews.update', $clientReview) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$clientReview->name" required />
        <x-admin.text-input name="designation" label="Designation" :value="$clientReview->designation" required />
        <div class="mb-4">
            <label for="avatar" class="block text-gray-700 font-bold mb-2">Avatar</label>
            <input type="file" name="avatar" id="avatar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if ($clientReview->avatar)
                <img src="{{ $clientReview->avatar_url }}" alt="{{ $clientReview->name }}" class="h-16 w-16 object-cover mt-2">
            @endif
        </div>
        <x-admin.text-input name="rating" label="Rating" :value="$clientReview->rating" required />
        <x-admin.textarea name="review" label="Review" :value="$clientReview->review" required />
        <x-admin.select-input name="reviewable_type" label="Review Type" :options="['' => 'Common', 'App\Models\Service' => 'Service', 'App\Models\Project' => 'Project', 'App\Models\Software' => 'Software']" :selected="$clientReview->reviewable_type" />

        <div id="reviewable-items-container" style="display: none;">
            <x-admin.select-input name="reviewable_id" label="Reviewed Item" :options="[]" :selected="$clientReview->reviewable_id" />
        </div>

        <x-admin.text-input name="sort" label="Sort Order" type="number" :value="$clientReview->sort" />
        <x-admin.checkbox-input name="is_active" label="Active" :checked="$clientReview->is_active" />

        <x-admin.submit-button label="Update" />
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
            const selectedId = "{{ $clientReview->reviewable_id }}";

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
                    if (option.id == selectedId) {
                        optionElement.selected = true;
                    }
                    reviewableId.appendChild(optionElement);
                });

                reviewableItemsContainer.style.display = options.length > 0 ? 'block' : 'none';
            }

            reviewableType.addEventListener('change', updateReviewableItems);
            updateReviewableItems();
        });
    </script>
@endpush
