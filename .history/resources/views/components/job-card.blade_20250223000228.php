@props(['job'])
<x-panel class="flex flex-col text-center">
  <div class="self-start text-sm">{{$job->employer->name}}</div>
     <div class="py-8"><h3 class="group-hover:text-blue-500 transition-colors duration-300 text-xl  font-bold"><a href="{{$job->url{{$job->title}}</a>
     </h3>
     <p class="text-sm mt-4">{{$job->schedule}}-{{$job->salary}}</p></div>
  <div class="flex justify-between items-center mt-auto"> 
      <div class="">
        @foreach ($job->tags as $tag)
        <x-tag :$tag size="small">{{$tag->name}}</x-tag>
        @endforeach
    
   
 
  </div> 
  <x-employer-logo :width=42></x-employer-logo>
     
  </div>

</x-panel>