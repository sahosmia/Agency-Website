@props(['showUrl' => null, 'editUrl' => null, 'deleteRoute'])

<div class="dropdown">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-right">
        @if ($showUrl)
            <a class="dropdown-item" href="{{ $showUrl }}">Show</a>
        @endif
        @if ($editUrl)
            <a class="dropdown-item" href="{{ $editUrl }}">Edit</a>
        @endif
        <x-admin.bootstrap.delete-button :route="$deleteRoute" display-as="link" class="w-100" />
    </div>
</div>
