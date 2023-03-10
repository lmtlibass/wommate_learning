@push('style')
    @vite('resources/css/pages/cours.css')
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
    <div class="cour-section flex flex-wrap">
        <div class=" flex-auto card bar-menu">
            <h2 class="text-center text-4xl font-bold">
                Modules
            </h2>
            <ul class="flex flex-col">
                @foreach ($modules as $module)
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    {{$module->moduleName}}</li>
                @endforeach
            </ul>
        </div>
       <div style="margin-left: 430px;margin-top : 10%; " class="grid grid-cols-2 gap-4" >

            @foreach ($cours as $cour)
            
                <div class="card-cours flex-auto max-w-xs mb-6 p-4 mx-5 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" >
                    <img class="w-full h-40 rounded-lg" src="{{URL::asset($cour->media)}}" alt="Sunset in the mountains">
                    <a href="#">
                        <h5 class="mb-2 text-sm font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{$cour->title}}</h5>
                    </a>
                    <p class="text-sm text-gray-700 dark:text-gray-200">
                        {{substr($cour->description, 0,60)}}</p>
                    
                    <a href="{{route('chapitres', $cour->id)}}" type="button" class="inline-block  text-sm font-semibold text-gray-700 mr-2 mb-2" >
                        Voir cours</a>
                    
                </div>

            @endforeach
            {{-- PAGINATION --}}
        </div> 
        <div class="mt-5 mx-auto mb-5 p-1 w-96 grid grid-cols-1 rounded overflow-hidden shadow-lg  cursor-pointer" >
            {{ $cours->links() }}
       </div>
    </div>
@endsection