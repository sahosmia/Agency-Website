@props(['route', 'displayAs' => 'button'])

<form action="{{ $route }}" method="POST" {{ $attributes->merge(['class' => 'd-inline']) }}>
    @csrf
    @method('DELETE')
    <button type="submit"
        @class([
            'btn btn-danger btn-sm' => $displayAs === 'button',
            'dropdown-item text-danger' => $displayAs === 'link',
        ])
        onclick="return confirm('Are you sure?')">
        Delete
    </button>
</form>
