<x-layout>
    <x-page-heading>Results</x-page-heading>
    <section class="mt-10 max-sm:mx-3">
        @foreach ($jobs as $job)
            <div class="mt-6 space-y-6">
                <x-job-card-wide :$job />
            </div>
        @endforeach
    </section>
</x-layout>
