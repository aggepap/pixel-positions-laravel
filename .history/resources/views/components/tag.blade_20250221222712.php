@props(['size' => 'base'])
@php
  if($size == 'base') {
    $fontSize = 'text-xs';
  }
  if($size == 'small') {
    $fontSize = 'text-2xs';
  }

@endphp
<a href="#" class="bg-white/10 px-3 py-1 rounded-xl {{$fontsize}} hover:bg-white/25 font-bold  transition-colors duration-300 ">{{$slot}}</a>