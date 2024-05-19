@props(['job'])
<x-panel class="min-h-44 p-6">
    <div>
        <x-employer-logo :employer="$job->employer" class="self-start" />
    </div>
    <div class="flex-1 flex flex-col gap-y-2">
        <a href="#" class="text-sm text-gray-400">
            {{ $job->employer->name }}
        </a>
        <h3 class="text-2xl font-semibold group-hover:text-blue-800 mb-5 transition-all duration-200">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="mt-auto text-sm text-gray-400">
            {{ $job->schedule }} - from {{ $job->salary }}
        </p>
    </div>
    <div class="flex flex-col justify-between">
        <div class="self-end">
            <span
                class="px-3 py-1 border bg-black/10 border-white/10 transition-colors duration-200 rounded-xl text-2xs font-bold">{{ $job->location }}</span>
            <span
                class="px-3 py-1 border bg-black/10 border-white/10 transition-colors duration-200 rounded-xl text-2xs font-bold">{{ $job->created_at->diffForHumans() }}</span>
        </div>
        <div class="flex gap-2">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
    </div>
</x-panel>
