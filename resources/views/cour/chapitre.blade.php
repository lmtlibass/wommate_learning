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
                    <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
                              controls preload="auto" height="600" width="980">

                         <source src="{{URL::asset('video/vid.mkv')}}" type="video/mp4" />
                    </video>
                    <h3 class="title"></h3>
                    <p class="description block text-sm font-light leading-relaxed mt-0 mb-4 text-pink-800"></p>
               </div>
          </div>

          <div class="video-list">
               @foreach ($chapitres as $chapitre)
                    <div class="vid ">
                         <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
                         controls preload="auto" height="600" width="980">

                         <source src="{{$chapitre->content}}" type="video/mp4" />
                    </video>
                         {{-- <video src="{{URL::asset('https://youtu.be/bbnQupMEoow')}}" controls muted autoplay></video> --}}
                         <h3 class="title text-sm">{{$chapitre->title}}</h3>
                         <p class="description hidden">
                              {{$chapitre->description}}
                         </p>
                    </div>
               @endforeach
          </div>
     </div>

     {{-- {{$cour->description}} --}}
@endsection

