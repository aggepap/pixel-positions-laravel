<x-layout>
<x-page-heading>Create a job</x-page-heading>

<x-forms.form method="POST" action="/jobs">

<x-forms.input label="Title" type="text" name="title" placeholder="e.g. Senior Laravel Developer" />
<x-forms.input label="Salary" type="salary" name="title"  placeholder="e.g. $120,000" />
<x-forms.input label="Location" type="text" name="title"  placeholder="e.g. Remote, Boston MA, etc" />
</x-forms.form>

</x-layout>