<x-layout>
  <div class="space-y-10">

      <section class= "text-center pt-6">
          <h1 class="font-bold text-4xl mb-6">Search again</h1>
      
          <x-forms.form action="/search" class="mt-6"> 
          <x-forms.input :label="false" name="q" placeholder="I'm looking for.." />
          </x-forms.form>
      </section>

 <section>
  <x-section-heading>Search Results</x-section-heading>

  <div class="mt-6 space-y-6">
      @foreach ($jobs as $job )
      <x-job-card-wide :$job />
      @endforeach
      
  
      </div>
  </section>
</div>
</x-layout>