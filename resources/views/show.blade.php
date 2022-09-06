@extends('layouts.app')

@section('title', 'EVENT DETAIL')

@section('content')

<?php
$eventSpaces = $event->spaces;
$numberOfUsers = count($event->user);
$currentSpaces = $eventSpaces - $numberOfUsers;
?>


<section id="center" class="cardSection">
   <div class="max-w-sm m-2 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" id="card">
      <div class="rounded-t-lg" id="imgDiv" style="background-image: url('{{ $event->img }}'); opacity: 0.8; background-size: 100% 100%;">
         <div class="timeSpaces">
            <div class="fs-4 text-white">{{ $event->event_date }}</div>
            <div class="fs-4 text-white">{{ $currentSpaces }} places left</div>
         </div>
      </div>
      <div class="px-5 py-1">
         <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-dark" id="title">{{ $event->title }}</h3>
         <p class="mb-4 font-normal text-black-700 dark:text-black-400" id="description">{{ $event->description }}</p>
         <div class="buttons d-flex justify-content-around">
            @if(!Auth::user() || (Auth::check() && !Auth::user()->event->contains($event->id)))
            @if ($event->date > now())
               
      
            <a href="{{ route('inscribe', $event->id) }}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
               Join
            </a>
            @endif
            @endif
            <a href="{{ route('home') }}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
               Back
            </a>
            @if(Auth::check() && Auth::user()->event->contains($event->id))
            <a href="{{ route('cancelInscription', $event->id) }}" class="inline-flex items-center py-2 px-1 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
               Unsuscribe
            </a>
            @endif
         </div>
      </div>
   </div>
</section>


@endsection