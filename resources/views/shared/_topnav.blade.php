<style>
     .btn-connexion {
         cursor: pointer !important;
         color: #fff !important;
     }
 </style>
 <!-- component -->
 <div class="flex-1 flex flex-col topnav">
     <nav class="px-4 flex justify-around bg-0091B1 h-16">
 
         <!-- top bar left (contacts)-->
         <ul class="flex items-center">
             <!-- email -->
             <li class="h-6 w-6">
                 <img
                     class="h-full w-full mx-auto"
                     src="{{URL::asset('/img/mail.png')}}"
                     alt="svelte logo" />
             </li>
             <li class="ml-1 text-white">
                 contact@wommate.coim
             </li>
             {{-- Telephone --}}
             <li class="h-6 w-6 ml-4">
                 <img
                     class="h-full w-full mx-auto rounded-lg"
                     src="{{URL::asset('/img/phone.png')}}"
                     alt="svelte logo" />
             </li>
             <li class="ml-1 text-white">
                 +221 78 290 25 12
             </li>
         </ul>
 
         <!-- to bar right  -->
         <ul class="flex items-center">
 
             
             <li class="h-14 mt-4 ">
               @guest
                    @if (Route::has('login'))
                         <li class="pr-2 h-14 mt-4">
                              <a 
                              href="{{url('login')}}"
                              type="button" 
                              class="flex items-center text-white btn-connexion text-sm px-4 py-2 text-center  mb-2">
                              <img src="{{Url::asset('/img/connexion.png')}}" alt="+">
                              Connexion</a>
                         </li>
                    @endif

                    @if (Route::has('register'))
                         <li class="pr-2 h-14 mt-4">
                              <a 
                                   href="{{url('register')}}"
                                   type="button" 
                                   class="flex items-center text-white btn-inscription text-sm px-4 py-2 text-center  mb-2">
                                   <img src="{{Url::asset('/img/connexion.png')}}" alt="+"> 
                                   Inscription</a>
                         </li>
                    @endif
                    @else
                         <li class="nav-item dropdown">
                              {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle b" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: red">
                                   {{ Auth::user()->name }}
                              </a> --}}

                        
                              <a class="flex items-center text-white btn-inscription text-sm px-4 py-2 text-center  mb-2" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                              </form>
                         
                         </li>
               @endguest
              
             </li>
 
         </ul>
 
     </nav>
 </div>