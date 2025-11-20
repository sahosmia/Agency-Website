<div class=" flex flex-col gap-4 ">
    <a href="{{ route('projects.show', $project->slug) }}">
        <img class="rounded-md w-full h-[340px] object-cover" src="{{ $project->thumbnail_url }}"
            alt="{{ $project->title }}">
    </a>
    <div>
        <a href="{{ route('projects.show', $project->slug) }}">
            <h1 class="title-text-bold-medium text-secondary-950 line-clamp-1">{{ $project->title }}</h1>
        </a>
        <div class="flex gap-2 justify-between items-center mt-2">
            <p class=" body-text-regular-medium text-secondary-600 line-clamp-2 ">{{ $project->short_text }} </p>
            <a href="{{ $project->live_preview_link }}"
                class="bg-white flex justify-center items-center gap-2 rounded py-2 px-3 text-nowrap  text-secondary-800 text-base/5 font-semibold">See
                live preview <span> <i class="fa-solid fa-arrow-up-right-from-square"></i></span> </a>
        </div>

    </div>
</div>