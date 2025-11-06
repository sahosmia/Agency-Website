@props(['route', 'displayAs' => 'button'])

<form action="{{ $route }}" method="POST" {{ $attributes->merge(['class' => 'inline-block delete-form']) }}>
    @csrf
    @method('DELETE')
    <button type="submit"
        @class([
            'text-red-500 hover:underline' => $displayAs === 'button',
            'block w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-100' => $displayAs === 'link',
        ])>
        Delete
    </button>
</form>

@pushOnce('scripts')
<script>
    document.addEventListener('submit', function (e) {
        if (e.target.matches('.delete-form')) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.submit();
                }
            });
        }
    });
</script>
@endPushOnce
