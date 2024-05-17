<x-layout>
    <section class="mt-20 text-center flex flex-col gap-6">
        <x-hero />
    </section>
    <section class="mt-16">
        <x-section-heading>Featured Jobs</x-section-heading>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            <x-job-card></x-job-card>
            <x-job-card></x-job-card>
            <x-job-card></x-job-card>
        </div>
    </section>
    <section class="mt-10">
        <x-section-heading>Tags</x-section-heading>
        <div class="mt-6 space-x-2">
            <x-tag>Frontend</x-tag>
            <x-tag>Backend</x-tag>
            <x-tag>API</x-tag>
            <x-tag>Laravel</x-tag>
            <x-tag>Vue</x-tag>
            <x-tag>Tailwindcss</x-tag>
            <x-tag>Frontend</x-tag>
            <x-tag>Backend</x-tag>
            <x-tag>API</x-tag>
            <x-tag>Laravel</x-tag>
            <x-tag>Vue</x-tag>
            <x-tag>Tailwindcss</x-tag>
        </div>
    </section>
    <section class="mt-10">
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="mt-6 space-y-6">
            <x-job-card-wide></x-job-card-wide>
        </div>
        <div class="mt-6 space-y-6">
            <x-job-card-wide></x-job-card-wide>
        </div>
        <div class="mt-6 space-y-6">
            <x-job-card-wide></x-job-card-wide>
        </div>
    </section>
</x-layout>
