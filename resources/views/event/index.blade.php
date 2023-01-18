@push('style')
    @vite('resources/css/pages/events.css')
    @vite('resources/css/home/home.css')
@endpush
@extends('layouts.app')

@section('header')
    <div class=" fixed w-full z-10 -top-5">
        @include('shared/_navbar')
    </div>
    @include('shared/_mobileNave')
@endsection

@section('content')


<form class="mt-32 w-1/2 ml-11 mr-auto">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5  text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class="block w-full pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#FA8316] focus:border-[#FA8316] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-[#0091B1] hover:bg-[#E5EA00] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>


<div class="flex section-card-events pb-5  flex-wrap px-10" data-aos="flip-right"
>
  @foreach ($events as $event)
    <div class="flex-auto mx-4 card my-10">
      <img src="{{$event->media}}" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b></b></h4> 
        <p>{{ substr($event->description, 0,100)}}[...]</p> 
      </div>
      <button class="btn-card-event" onclick="location.href='{{url('event', $event->id)}}'">
        voir plus
      </button>
    </div>

  @endforeach
</div>

<div class="  float-right px-14 h-10 w-full">
    {{ $events->links() }}
</div>


@endsection


@section('footer')
   @include('shared/_footer')
@endsection