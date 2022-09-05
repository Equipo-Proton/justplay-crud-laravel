@extends('layouts.app')

@section('title', 'MY EVENTS')

@section('content')

<?php

$currentEvents = [];
foreach ($eventsOfUser as $eventOfUser) {
  if ($eventOfUser->event_date > now()) {
    array_push($currentEvents, $eventOfUser);
  }
}
$countEventsUser = count($currentEvents);
?>

<p class="text-center">You are subscribed to {{ $countEventsUser }} at this moment.</p>

<div class="my_events_page inline-flex mx-2 ">
  <div class="My Events  ml-0 mr-20 p-3 hover:font-bold">
    <button type="button">My Events</button>
  </div>
  <div class="Past Events ml-20 p-3 hover:font-bold">
    <a href="{{ route('myPastEvents') }}"><button type="button">Past Events</button></a>
  </div>
</div>


@foreach ($eventsOfUser as $eventOfUser)

<?php
$eventSpaces = $eventOfUser->spaces;
$numberOfUsers = count($eventOfUser->user);
$currentSpaces = $eventSpaces - $numberOfUsers;
?>
  @if ($eventOfUser->event_date > now())
  <section id="centerBox" class="flex justify-center flex-col items-center  md:flex-row">
    <div class="card m-2">
      <img class="object-cover w-full h-200 rounded-t-sm ms:h-auto sm:w-48 sm:rounded-none md:rounded-none sm p-0 card-img" src="{{ $eventOfUser->img }}" alt="Event Image">
      <div class="card-img-overlay text-white flex justify-end items-end">
        <p class="">{{$eventOfUser->event_date}}</p>
      </div>
    </div>
    <div id="paragraph" class="justify-between p-4 leading-normal max-w-screen-md">
      <div class="max-w-screen-sm flex justify-between min-w-full bg-green-200  p-2  mt-2 title">
        <a href="{{ route('showEvent', $eventOfUser->id) }}">
          <h5 class="w-full text-xl font-bold tracking-tight text-gray-900 dark:text-black uppercase">{{$eventOfUser->title}}</h5>
        </a>
        <a href="{{ route('cancelInscription', $eventOfUser->id) }}">
          <button type="submit" class="text-xs p-1 border-4 font-bold border-white text-red-600" id="unsubscribebutton">UNSUBSCRIBE</button>
        </a>
      </div>
      <p class="mb-3 font-normal text-gray-700  bg-gray-200 p-2">{{ $eventOfUser->description }} </p>
    </div>

    <div id="spaces" class="flex flex-center px-2">
      <p>Spaces</p>
      <p class="border border-black rounded-xl bg-gray-200 px-4 my-3">{{ $currentSpaces }}</p>
    </div>
  </section>
  @endif
@endforeach
@endsection