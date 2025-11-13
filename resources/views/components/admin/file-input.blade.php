@props(['name', 'label', 'value' => '', 'imgClass'=>"h-16 w-16" ])



<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700">{{ $label }}</label>
    <input type="file" name="{{ $name }}" id="{{ $name }}" class="w-full px-3 py-2 border rounded-md"
        onchange="previewImage(event, '{{ $name }}')">
    <div id="preview-container-{{ $name }}" class="mt-2">
        @if ($value)
        @php
        $imagePath = asset('storage/' . $value);
        @endphp
        <span id="old-image-{{ $name }}">
            <img src="{{ $imagePath }}" class="object-cover rounded {{ $imgClass }}">
        </span>
        @endif
        <img id="preview-{{ $name }}" class="object-cover rounded {{ $imgClass }}" style="display: none;">
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
                    if (oldImage) {
                        oldImage.style.display = 'none';
                    }
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endPushOnce