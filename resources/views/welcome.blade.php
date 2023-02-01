<style>
 .custom-shape-divider-top-1674903924 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1674903924 svg {
    position: relative;
    display: block;
    width: calc(171% + 1.3px);
    height: 195px;
}

.custom-shape-divider-top-1674903924 .shape-fill {
    fill: #FFFFFF;
}
</style>
@push('style')
    @vite('resources/css/home/home.css')
@endpush
<div class="row">
    @extends('layouts/app')
</div>
@section('header')    
    <div class="">
        @include('shared/_topnav')
    </div>
    <div class="mt-6">
        @include('shared/_navbar')
    </div>
    @include('shared/_mobilenave')
@endsection

@section('content')
    <section class="header custom-shape-divider-bottom-1674903616">
      <div class="sub-header flex h-70 w-full">
        <h1 class="flex-1 mx-10 mt-32 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-4xl dark:text-white">
          La plateforme d’apprentissage communautaire qui assure votre avenir!
        </h1>
        <div class="flex-1 img ">
          <img src="{{URL::asset('/img/items_1.png')}}" alt="" class="w-70 h-70">
        </div>
      </div>
    </section>
    <section class="section-1 px-32 section-mobile">
        <h2 class="flex justify-items-center mt-11 mb-11 font-bold">
          Bienvenue chez wommate <div class="trait  mt-6 ml-3"></div>
        </h2>
         {{--cards --}}
         
        <div class="flex flex-row-reverse section-1-content flex-wrap justify-between">
          {{-- card-2 --}}
          <div class="flex-2 card w-64 mt-4 max-w-sm p-0 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" data-aos="flip-left">
            <div class="bg-gray-300 rounded-lg">
              <h3 class="text-center font-bold">
                En savoir plus</h3>
            </div>
            <a class="voir-cours">
              <h3 class="font-bold">
                Voir cours
              </h3>
            </a>
            <hr>
            <a class="evenement-a-venir">
              <h3 class="font-bold">
                Evenement à venir
              </h3>
            </a>
            <hr>
            <a class="mentors">
              <h3 class="font-bold">
                Les mentors
              </h3>
            </a>
          </div>
          {{-- card 1 --}}
          <div class="flex-1 card w-32 mt-4 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" data-aos="flip-right">
            <p class="font-normal text-gray-700 dark:text-gray-400">
              Here are the biggest enterprise technology acquisitions of 2021 so far,
              in reverse chronological order. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo neque eligendi dolor ea pariatur. Facilis deleniti voluptatum dolores, aliquam error facere 
              obcaecati quod praesentium, ut, eos nesciunt excepturi eum sequi?
            </p>
          </div>
          
        </div>
    </section>

    {{--  --}}

    <section class="section-2 px-32 section-mobile">
      <h2 class="flex justify-items-center font-bold mt-11 mb-11">
        Derniers événements<div class="trait mx-3 mt-6"></div>
      </h2>

      {{-- cards events --}}
      <div class="flex section-card-events pb-5" data-aos="fade-up"
      data-aos-anchor-placement="center-bottom">
        @foreach ($recentEvent as $event)
          <div class="flex-auto mx-4 card">
            <img src="{{$event->media}}" alt="Avatar" style="width:100%">
            <div class="container">
              <h4><b></b></h4> 
              <p>{{ substr($event->description, 0,100)}}[...]</p> 
            </div>
            <button class="btn-card-event">
              voir plus
            </button>
          </div>
        @endforeach
      </div>
      
    </section>

    {{--  --}}
    <section class="section3 w-full px-32 py-7 mt-11 section-mobile">
      <div class="">
        <h2 class="flex justify-items-center font-bold mt-11 mb-11">
          Comment devenir formateur ?<div class="trait mx-3 mt-6"></div>
        </h2>
  
        <div class="devenir-formateur-section flex">
          <div class="flex-1 text">
            <p class="">
              Avant de pouvoir  partager un cours, il va falloir 
              faire une demande à l’admin, qui va a son tours étudier et valider
              ou non la demande. Une fois validé vous aurez le rôle créateurs et un espace
              pour rédiger, partager, évaluer et faire le suivi de votre cours
            </p>
          </div>
          <div class="flex-1">
            <button class="btn-app">
              voir plus
            </button>
          </div>
        </div>
      </div>
    </section>

    {{--  --}}
    <section class="section-4 mt-10 mb-10 px-32 section-mobile">
      <h2 class="flex justify-items-center font-bold mt-11 mb-11">
        Nos partenaires<div class="trait mx-3 mt-6"></div>
      </h2>
      <div class="flex partenaires-img scale-90">
        <div class="flex-1">
          <div class="flex-auto mx-4 card">
            <img src="https://via.placeholder.com/90" alt="Avatar" style="width:100%">
          </div>
        </div>
        <div class="flex-1">
          <div class="flex-auto mx-4 card">
            <img src="https://via.placeholder.com/90" alt="Avatar" style="width:100%">
          </div>
        </div>
        <div class="flex-1">
          <div class="flex-auto mx-4 card">
            <img src="https://via.placeholder.com/90" alt="Avatar" style="width:100%">
          </div>
        </div>
        <div class="flex-1">
          <div class="flex-auto mx-4 card">
            <img src="https://via.placeholder.com/90" alt="Avatar" style="width:100%">
          </div>
        </div>
        <div class="flex-1">
          <div class="flex-auto mx-4 card">
            <img src="https://via.placeholder.com/90" alt="Avatar" style="width:100%">
          </div>
        </div>
        
      </div>
    </section>
@endsection

@section('footer')
   @include('shared/_footer')
@endsection

