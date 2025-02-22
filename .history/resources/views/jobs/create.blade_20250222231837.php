<x-layout>
<x-page-heading>Create a job</x-page-heading>

<x-forms.form method="POST" action="/jobs">

<x-forms.input label="Title" type="text" name="title" placeholder="e.g. Senior Laravel Developer" />
<x-forms.input label="Salary" type="salary" name="title"  placeholder="e.g. $120,000" />
<x-forms.input label="Location" type="text" name="title"  placeholder="e.g. Boston MA, etc" />
<x-forms.input label="URL" type="url" name="url" placeholder="e.g. https://laravel.com" />
<x-forms.input label="Tags(comma seperated)" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" />
<x-forms.button>Create job</x-forms.button>
</x-forms.form>

</x-layout>