@props(['size' => 'base'])
@php
  if($size == 'base') {
    $fontSize = 'text-xs';
    $padding = 'px-5 py-1';
  }
  if($size == 'small') {
    $fontSize = 'text-2xs';
    $padding = 'px-3 py-1';
  }
@endphp
<a href="#" class="bg-white/10  rounded-xl {{$fontSize}} {{$padding}} hover:bg-white/25 font-bold  transition-colors duration-300 ">{{$slot}}</a>