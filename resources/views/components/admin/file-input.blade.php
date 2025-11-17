@props(['name', 'label', 'value' => '', 'imgClass'=>"h-16 w-16"])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700 font-medium mb-2">{{ $label }}</label>

    {{-- Custom File Input --}}
    <label
        class="flex items-center gap-2 cursor-pointer px-3 py-2 border rounded-md border-gray-300 bg-white hover:bg-gray-50 transition">
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M4 12l4-4 4 4m0 0l4-4 4 4" />
        </svg>
        <span class="text-gray-600 text-sm">Choose file</span>
        <input type="file" name="{{ $name }}" id="{{ $name }}" class="hidden"
            onchange="previewImage(event, '{{ $name }}')">
    </label>

    {{-- Image Preview --}}
    <div id="preview-container-{{ $name }}" class="mt-3 flex items-center gap-3">
        @if ($value)
        @php $imagePath = asset('storage/' . $value); @endphp
        <span id="old-image-{{ $name }}">
            <img src="{{ $value }}" class="object-cover rounded-lg shadow-sm {{ $imgClass }}">
        </span>
        @endif
        <img id="preview-{{ $name }}" class="object-cover rounded-lg shadow-sm {{ $imgClass }}" style="display: none;">
    </div>

    <x-admin.error-message :name="$name" />
</div>

@pushOnce('scripts')
<script>
    function previewImage(event, name) {
        const input = event.target;
        const preview = document.getElementById('preview-' + name);
        const oldImage = document.getElementById('old-image-' + name);

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                if (oldImage) oldImage.style.display = 'none';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endPushOnce