<x-layout>
  <x-page-heading>Login</x-page-heading>
  
  <x-forms.form method="POST" action="/login">
    <x-forms.input label="Name" type="text" name="name" />
    <x-forms.input label="Email" type="email" name="email" />
    <x-forms.input label="Password" type="password" name="password" />
    <x-forms.input label="Password Confirmation" type="password" name="password_confirmation" />
  
    <x-forms.divider />
  
    <x-forms.input label="Employer Name" type="text" name="employer" />
    <x-forms.input label="Employer Logo" type="file" name="logo" />
    <x-forms.button>Create account</x-forms.button>
  </x-form.form>
    </x-layout> 