<x-layout>
<x-page-heading>Register</x-page-heading>

<x-forms.form method="POST" action="/register">
  <x-forms.input label="Name" type="text" name="name" />
  <x-forms.input label="Email" type="email" name="email" />
  <x-forms.input label="Password" type="password" name="password" />
  <x-forms.input label="Password Confirmation" type="password" name="password_confirmation" />

  <x-forms.divider />
  <x-forms.button>Create account</x-forms.button>
</x-form.form>
  </x-layout> 