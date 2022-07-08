<div class="card flex flex-col" style="height:200px">
    <h3 class="font-normal text-xl py-2 mb-3 -ml-5 border-l-4 border-accent-light pl-4" style="border-color:#47cdff;">
        <a href="{{ $project->path() }}" class="text-default no-underline">{{ $project->title }}</a>
    </h3>
    <div class="mb-1 flex-1">{{ str_limit($project->description, 100) }}</div>

    @can ('manage', $project)
    <footer>
        <form method="POST" action="{{ $project->path() }}" class="text-right">
            @method('DELETE')
            @csrf
            <button type="submit" class="text-xs">Delete</button>
        </form>
    </footer>
    @endcan
</div>