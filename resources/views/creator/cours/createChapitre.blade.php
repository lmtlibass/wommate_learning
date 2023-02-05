@extends('admin.base.app')

@section('content')
     <!-- component -->
     <section class="antialiased h-screen mt-7 mx-auto" x-data="app">
          <!-- component -->
          
          <div class="min-h-screen p-6 bg-white flex items-center justify-center">
               <div class="container max-w-screen-lg mx-auto">
                    <div>
                         <h2 class="font-semibold text-xl text-gray-600">Gestion cours</h2>
                         <p class="text-gray-500 mb-6">Ajouter les chapitres</p>

                         <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                              <div class="lg:col-span-2">
                                   <form action="{{ route('createur.chapitre.save', $cour->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                             <div class="md:col-span-5">
                                                  <label for="title">Title</label>
                                                  <input type="text" name="title" id="title"
                                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                       placeholder="entrer un titre" />
                                                  @error('title')
                                                       <span
                                                            class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                            <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                             </div>
                                             <div class="md:col-span-5">
                                                  <label for="number">Numéro de de chapitre</label>
                                                  <input type="number" name="number" id="number"
                                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                       placeholder="numéro de chapitre" />
                                                  @error('number')
                                                       <span
                                                            class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                            <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                             </div>
                                             {{-- description  --}}
                                             <div class="md:col-span-5">
                                                  <label for="description">Description</label>
                                                  <textarea name="description" id="description" cols="30" rows="20"
                                                       class="h-24 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="description"></textarea>
                                                  @error('description')
                                                       <span
                                                            class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                            <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                             </div>
                                             <div class="md:col-span-5">
                                                  <label for="content">Contenu du chapitre</label>
                                                  <input type="file" name="content" id="content"
                                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                       value="" />
                                                  @error('content')
                                                       <span
                                                            class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                            <strong>{{ $message }}</strong>
                                                       </span>
                                                  @enderror
                                             </div>

                                             <div class="md:col-span-5 text-right mt-11 flex justify-between w-full">
                                                  <div class="inline-flex items-start">
                                                       <button type="submit"
                                                            class="bg-[#0091B1] hover:[#0091B1] text-white font-bold py-3 px-4 rounded">
                                                            Envoyer</button>
                                                  </div>
                                                  <div class="inline-flex items-end">
                                                       <a href="{{ route('createur.cour.index') }}"
                                                            class="bg-[#E5EA00] cursor-pointer hover:[#0091B1] text-white font-bold py-3 px-4 rounded">
                                                            Terminer</a>
                                                  </div>
                                             </div>
                                   </form>

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
