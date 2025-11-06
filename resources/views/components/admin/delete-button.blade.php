@props(['route'])

<form action="{{ $route }}" method="POST" class="inline-block ml-2 delete-form">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-500 hover:underline">Delete</button>
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
