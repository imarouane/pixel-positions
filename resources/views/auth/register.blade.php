<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer_name" />

        <x-forms.field label="Employer Logo" name="employer_logo">
            <input type="file" name="employer_logo"
                class="block w-full text-sm text-white/20
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-0
      file:text-sm file:font-semibold
      file:bg-blue-50 file:text-blue-600
      hover:file:bg-violet-100
    " />
        </x-forms.field>

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
