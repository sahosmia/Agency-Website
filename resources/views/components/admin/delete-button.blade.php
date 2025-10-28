@props(['route'])

<form action="{{ $route }}" method="POST" class="inline-block ml-2">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
</form>
