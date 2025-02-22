@props(['job'])
  <x-panel class="flex gap-x-6">
  <x-employer-logo :width=90></x-employer-logo>
  <div class="flex-1 flex flex-col justify-between"> 
  
  <a href="#" class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>
  <h3 class="group-hover:text-blue-500 transition-colors duration-300 text-xl  font-bold"><a href="{{$job->url}}" target="blank"> {{$job->title}}</a>
  </h3>
  <p class="text-sm text-gray-400 mt-auto">{{$job->schedule}} - {{$job->salary}}</p>
</div>

      <div class=" ">
        @foreach ($job->tags as $tag)
        <x-tag :$tag size="small">{{$tag->name}}</x-tag>
        @endforeach
    
 
  </div> 

</x-panel>