<x-layout>
    <x-page-heading>Create A Job</x-page-heading>
    <x-forms.form action="/jobs" method="POST">
        <x-forms.input label="Title" name="title" />
        <x-forms.input label="Slary" name="salary" />
        <x-forms.input label="Location" name="location" placeholder="Marrakesh, Massira 2" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
            <option value="Remote">Remote</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (Comma separated)" name="tags" placeholder="laravel, vue, full-stack" />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
