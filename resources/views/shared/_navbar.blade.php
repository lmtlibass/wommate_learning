
<nav class=" bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 w-full z-20 nav-principal left-0 border-b border-gray-200 dark:border-gray-600">
     <div class="container flex flex-wrap items-center justify-between mx-auto">
         <a href="{{ url('/') }}" class="flex items-center">
             <img class="logo" src="{{URL::asset('/img/wommatLogo.png')}}" alt="">
         </a>
 
         {{-- icone réseaux sociaux --}}
         <div class="flex md:order-2 mr-4">
             <a href="#" class="block py-2 pl-3 pr-4 w-9   rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">
                 <img src="{{URL::asset('/img/ig.png')}}" alt=""></a>
             <a href="#" class="block py-2 pl-3 pr-4 w-9   rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">
                 <img src="{{URL::asset('/img/twiter.png')}}" alt=""></a>
         </div>
 
         {{-- liens menu --}}
         <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
         <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
             <li>
                 <a href="/" 
                 class="block py-2 pl-3 pr-4 text-white bg-black-700 rounded md:bg-transparent md:text-black-700 md:p-0 dark:text-white" aria-current="page">
                     Accueil</a>
             </li>
             <li>
                 <a href="{{Route('mycours')}}" 
                 class="block py-2 pl-3 pr-4 text-white bg-black-700 rounded md:bg-transparent md:text-black-700 md:p-0 dark:text-white" aria-current="page">
                     Cours</a>
             </li>
             <li>
                 <a href="{{Route('event.index')}}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                     Evenements</a>
             </li>
             <li>
                 <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                     Mentors</a>
             </li>
             
             {{-- <li class="dropdown">
                 <a href="#" class="flex py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                     Modules<svg class="ml-2 w-4 h-4 mt-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                     </a>
                 <div class="dropdown-content">
                     @foreach ($modules as $module)
                         <a href="">{{ $module->module_name }}</a> <br>
                     @endforeach
                 </div>
             </li> --}}
             <li>
                 <a href="#" id="dropdownDefault" data-dropdown-toggle="dropdown" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                     A propos</a>
             </li>
             
         </ul>
         </div>
 
         
     </div>
   </nav>
   