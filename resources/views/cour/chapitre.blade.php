@push('style')
     @vite('resources/css/pages/chapitre.css')
     @vite('resources/css/home/home.css')
@endpush
@extends('layouts/app')

@section('header')
     <div class=" fixed w-full z-10 -top-5">
          @include('shared/_navbar')
     </div>
     @include('shared/_mobileNave')
@endsection

@section('content')
     {{-- <section class="flex justify-between w-full mt-32">
        <div class="flex-1 w-full float-right bg-red-500">
            <img src="{{URL::asset('img/inscription.png')}}" alt="img"> 
        </div>
        <div class="flex-1 w-32 flex-col ml-96">
            @forelse ($chapitres as $chapitre)
                <h3 class="text-xs  font-extrabold text-gray-900 dark:text-white md:text-sm lg:text-sm"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 cursor-pointer">
                    {{$chapitre->number}}</span> {{$chapitre->title}}</h3>
                    @empty
                    'nothing'
            @endforelse 
        </div>
    </section> --}}
     <div class="container mt-24">

          <div class="main-video">
               <div class="video">
                    <video src="videos/vid1.mkv" controls muted autoplay></video>
                    <h3 class="title">01. Introduction</h3>
               </div>
          </div>

          <div class="video-list">
               <div class="vid active">
                    <video src="videos/vid1.mkv" controls muted autoplay></video>
                    <h3 class="title">01. Chapitr1</h3>
               </div>
               <div class="vid">
                    <video src="videos/vid2.mkv" controls muted autoplay></video>
                    <h3 class="title">02. Chapitr1</h3>
               </div>
               <div class="vid">
                    <video src="videos/vid3.mkv" controls muted autoplay></video>
                    <h3 class="title">03. Chapitr2</h3>
               </div>
               <div class="vid">
                    <video src="videos/vid4.mkv" controls muted autoplay></video>
                    <h3 class="title">04. Chapitr3</h3>
               </div>
               <div class="vid">
                    <video src="videos/vid4.mkv" controls muted autoplay></video>
                    <h3 class="title">05. Chapitr3</h3>
               </div>
               <div class="vid">
                    <video src="videos/vid4.mkv" controls muted autoplay></video>
                    <h3 class="title">06. Chapitr3</h3>
               </div>
               <div class="vid">
                    <video src="videos/vid4.mkv" controls muted autoplay></video>
                    <h3 class="title">07. Chapitr3</h3>
               </div>
          </div>
     </div>
@endsection
