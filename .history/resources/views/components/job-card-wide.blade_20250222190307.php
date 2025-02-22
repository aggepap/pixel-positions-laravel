@props(['job'])
  <x-panel class="flex gap-x-6">
  <x-employer-logo :width=90></x-employer-logo>
  <div class="flex-1 flex flex-col justify-between"> 
  
  <a href="#" class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>
  <h3 class="font-bold text-xl mt-3 group-hover:text-blue-500 ">{{$job->title}}</h3>
  <p class="text-sm text-gray-400 mt-auto">{{$job->schedule}} - {{$job->salary}}</p>
</div>

      <div class=" ">
        @foreach ($job->tags as $tag)
        <x-tag :$tag size="small">Backend</x-tag>
        @endforeach
    
 
  </div> 

</x-panel>