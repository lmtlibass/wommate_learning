@extends('admin.base.app')

@section('content')
     <!-- component -->
     <section class="antialiased h-screen mt-7 mx-auto" x-data="app">

          <!-- component -->
          <div class="min-h-screen p-6 bg-white flex items-center justify-center">
               <div class="container max-w-screen-lg mx-auto">
                    <div>
                         <h2 class="font-semibold text-xl text-gray-600">Gestion cours</h2>
                         <p class="text-gray-500 mb-6">Ajouter un cour</p>

                         <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                              <div class="lg:col-span-2">
                                   <form action="{{ route('createur.cour.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                             <div class="md:col-span-5">
                                                  <label for="media">image du cour</label>
                                                  <input type="file" name="media" id="media"
                                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                       value="" />
                                             </div>

                                             <div class="md:col-span-5">
                                                  <label for="title">Title</label>
                                                  <input type="text" name="title" id="title"
                                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                       placeholder="entrer un titre" />
                                             </div>

                                             <div class="md:col-span-5">
                                                  <label for="description">Description</label>
                                                  <textarea name="description" id="description" cols="125" rows="10"
                                                       class="h-60 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="entrer une description"></textarea>
                                             </div>

                                             <div class="md:col-span-5">
                                                  <label for="module">Modules</label>
                                                  <select name="module_id" id="module_id"
                                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                                       <option value="">--Selectionner un module--</option>
                                                       @foreach ($modules as $module)
                                                            <option value="{{ $module->id }}">{{ $module->moduleName }}
                                                            </option>
                                                       @endforeach
                                                  </select>
                                             </div>

                                             <div class="md:col-span-5 text-right mt-11">
                                                  <div class="inline-flex items-end">
                                                       <button type="submit"
                                                            class="bg-[#0091B1] hover:[#0091B1] text-white font-bold py-3 px-4 rounded">
                                                            Envoyer</button>
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
