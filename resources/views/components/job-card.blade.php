@props(['job'])
<x-panel class="p-4 flex-col text-center">
    <h3 class="text-sm self-start">
        {{ $job->employer->name }}
    </h3>
    <div>
        <h3 class="text-2xl font-semibold group-hover:text-blue-800 mb-5 transition-all duration-200">
            {{ $job->title }}
        </h3>
        <p class="mt-auto">{{ $job->schedule }} - from {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between mt-auto">
        <div class="self-end flex flex-wrap gap-2">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach

        </div>
        <x-employer-logo width="42" />
    </div>
</x-panel>
