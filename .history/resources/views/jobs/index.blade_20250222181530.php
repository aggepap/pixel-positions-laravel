<x-layout>
    <div class="space-y-10">

        <section class= "text-center pt-6">
            <h1 class="font-bold text-4xl mb-6">Let's Find Your Next Job</h1>
            <form action="">
                <input type="text" placeholder="I'm looking for.." class="w-full bg-white/5 rounded-xl border border-white/10 p-2 px-5 py-4 max-w-xl">
            </form>
        </section>

    <section class="pt-10">
      <x-section-heading>Featured Jobs</x-section-heading>
        <div class="grid lg:grid-cols-3 gap-8 mt-6">   <x-job-card />
            <x-job-card />
            <x-job-card />
        </div>
         
    </section>
    <section>
       <x-section-heading>Tags</x-section-heading>

       <div class="mt-6 space-x-1">
        @foreach (tags as $tag )
        <x-tag>Tag</x-tag>
        @endforeach
       
     
       </div>
    </section>
   <section>
    <x-section-heading>Recent Jobs</x-section-heading>

    <div class="mt-6 space-y-6">
        <x-job-card-wide />
        <x-job-card-wide />
        <x-job-card-wide />
        </div>
    </section>
</div>
</x-layout>