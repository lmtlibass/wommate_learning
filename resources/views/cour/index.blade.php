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
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    html</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    css</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    JavaScrip</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Php</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    JAVA</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Python</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    C#</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    GO</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Ruby</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Laravel</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Spring</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Jango</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    JAVA</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Python</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    C#</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    GO</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Ruby</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Laravel</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Spring</li>
                <li class="cursor-pointer  hover:bg-[#E5EA00] hover:text-center">
                    Jango</li>
            </ul>
        </div>
        <div style="margin-left: 430px;margin-top : 10%; " class="flex-auto flex flex-row flex-wrap" >

            @foreach ($cours as $cour)
                <div class="card-cours flex-auto max-w-xs mb-6 p-4 mx-5 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" >
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{$cour->title}}</h5>
                    </a>
                    
                    <a href="{{route('cour.show', $cour->id)}}" type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm w-36 text-center " >
                        Voir cours</a>

                </div>

            @endforeach
            {{-- <div class="  float-right px-14 h-10 w-full">
                {{ $cours->links() }}
            </div> --}}
        </div>

        
    </div>
@endsection