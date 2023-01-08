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
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a help in Claim?</h5>
                    </a>
                    <a href="#" class="inline-flex items-center text-blue-600 hover:underline">
                        See our guideline
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
                    </a>
                </div>

            @endforeach
        </div>

        {{-- <div class="  float-right ml-96">
            {{ $cours->links() }}
        </div> --}}
    </div>
@endsection