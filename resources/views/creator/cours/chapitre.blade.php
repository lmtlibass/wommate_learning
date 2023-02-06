@extends('admin.base.app')

@section('content')
     {{-- importer le fichier chapitre.js--}}
     
     <!-- component -->
     <section class="antialiased h-screen mt-7 mx-auto" x-data="app">
          <!-- component -->
          <div class="min-h-screen p-6 bg-white flex items-center justify-center">
               <div class="container max-w-screen-lg mx-auto">
                    <div>
                         <div class="flex justify-content-between w-full">
                              <div class="flex-1">
                                   <h2 class="font-semibold text-xl text-gray-600">Gestion cours</h2>
                                   <p class="text-gray-500 mb-6">Ajouter les chapitres</p>
                              </div>
                              <div class="flex-1">
                                   <h2 class="font-semibold text-xl text-gray-600">
                                        <i class="bi bi-calculator"></i> Nombre de chapitres : 
                                        <span >{{count($cour->chapitres)}}</span>
                                   </h2>
                                   </div>
                              <div class="flex-2">
                                  <a href="{{ROUTE('createur.chapitre.get', $cour->id)}}"
                                        class="bg-[#FA8316] cursor-pointer hover:[#0091B1] text-white font-bold py-3 px-4 rounded">
                                        modifier chapitres <i class="bi bi-eye"></i>
                                  </a>
                              </div>
                         </div>

                         <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                              <div class="lg:col-span-2 flex justify-between">
                                   <div class="main-video flex-initial w-9/12">
                                        <div class="video">
                                             <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
                                                       controls preload="auto" height="600" width="980">
                         
                                                  <source src="{{URL::asset('video/vid.mkv')}}" type="video/mp4" />
                                             </video>
                                             <h3 class="title"></h3>
                                             <p class="description block text-sm font-light leading-relaxed mt-0 mb-4 text-pink-800"></p>
                                        </div>
                                   </div>
                         
                                   <div class="video-list flex-2 w-36 overflow-auto">
                                        @foreach ($chapitres as $chapitre)
                                             <div class="vid cursor-pointer">
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
                         </div>
                    </div>
               </div>
          </div>
          <div class="md:absolute mt-96 right-0 p-4 float-right">
               <img src="https://www.buymeacoffee.com/assets/img/guidelines/logo-mark-3.svg" alt="Buy Me A Coffee"
                    class="transition-all mt-36 rounded-full w-14 -rotate-45 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
          </div>
          </div>
          </div>
     </section>
@endsection

<script>
     let listVideo       = document.querySelectorAll('.video-list .vid');
     let mainVideo       = document.querySelector('.main-video video');
     let title           = document.querySelector('.main-video .title');
     let description     = document.querySelector('.main-video .description');
 
     listVideo.forEach(video => {
          video.onclick = () => {
               listVideo.forEach(vid => vid.classList.remove('active'));
               video.classList.add('active'); 

               if(video.classList.contains('active')){
                    let src = video.children[0].getAttribute('src');
                    mainVideo.src = src;
                    let text = video.children[1].innerHTML;
                    title.innerHTML = text;
                    description.innerHTML = video.children[2].innerHTML;
               }
          }
     });
 </script>