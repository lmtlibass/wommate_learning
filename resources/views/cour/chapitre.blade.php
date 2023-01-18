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
  

     <div class="containers">

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

     {{-- {{$cour->description}} --}}
@endsection

