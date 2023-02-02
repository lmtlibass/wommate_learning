@extends('admin.base.app')

@section('content')

     <!-- component -->
     <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

     <section class="antialiased h-screen mt-7 mx-auto" x-data="app">
          <div class="grid grid-cols-3 gap-4">
               @foreach ($cours as $cour)
                    <div class="mt-5 mx-3 max-w-sm rounded overflow-hidden shadow-lg h-96 cursor-pointer">
                         <img class="w-full h-40" src="{{URL::asset($cour->media)}}" alt="Sunset in the mountains">
                         <div class="px-6 py-4">
                              <div class="font-bold text-xl mb-2">{{ $cour->title }}</div>
                              <p class="text-gray-700 text-base">
                                   {{ substr($cour->description, 0, 100) }}
                              </p>
                         </div>
                         <div class="px-6 pt-4 pb-2">
                              <span
                                   class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $cour->module->moduleName }}</span>
                              <span class="statut inline-block  rounded-full px-3 py-1 text-sm font-semibold text-[#fff] mr-2 mb-2">
                                   @if ($cour->statut == true)
                                        publier
                                   @else
                                        pas encor publier
                                   @endif
                              </span>
                              
                         </div>
                    </div>
                   
               @endforeach
          </div>

          {{-- pagination --}}
          <div class="mt-5 mx-auto p-4 max-w-sm rounded overflow-hidden shadow-lg  cursor-pointer">
               {{ $cours->links() }}
          </div>
     </section>
@endsection


