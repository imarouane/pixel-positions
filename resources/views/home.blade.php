<x-layout>
    <section class="mt-20 max-sm:mx-3 text-center flex flex-col gap-6">
        <x-hero />
    </section>
    <section class="mt-16 max-sm:mx-3">
        <x-section-heading>Featured Jobs</x-section-heading>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            @foreach ($featuredJobs as $job)
                <x-job-card :$job />
            @endforeach
        </div>
    </section>
    <section class="mt-10 max-sm:mx-3">
        <x-section-heading>Tags</x-section-heading>
        <div class="mt-6 space-x-2">
            @foreach ($tags as $tag)
                <x-tag :$tag />
            @endforeach

        </div>
    </section>
    <section class="mt-10 max-sm:mx-3">
        <x-section-heading>Recent Jobs</x-section-heading>
        @foreach ($jobs as $job)
            <div class="mt-6 space-y-6">
                <x-job-card-wide :$job />
            </div>
        @endforeach
    </section>
</x-layout>
