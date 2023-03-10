@vite('resources/css/partials/footer.css')
<div class="sup-footer w-full p-7">
     <div class="flex content">
       {{-- **************** --}}
       <div class="flex-1 info">
         <img src="{{Url::asset('/img/wommatLogo.png')}}" alt="womatte" class="footer-logo">
         <div class="ml-4">
          <p>votre carrière démarre par là</p>
          <h6 class="mt-3">
               Infos
          </h6>
          <p>
               +221 70 907 18 39
          </p>
          <p>
               contact@womate.com
          </p>
         </div>
       </div>
       {{-- ************** --}}
       <div class="flex-1 flex flex-col justify-center">
         <h6>
           Explorer
         </h6>
         <ul class=" ">
           <li>
               <a href="#" 
               class=" " aria-current="page">
                   Cours</a>
           </li>
           <li>
               <a href="#" class=" ">
                   Evenements</a>
           </li>
           <li>
               <a href="#" class=" ">
                   Mentors</a>
           </li>
           <li>
             <a href="#" class=" ">
                 Modules</a>
           </li>
           <li>
             <a href="#" class=" ">
                 A propos</a>
           </li>
         </ul>

       </div>
       {{-- ************* --}}
       <div class="flex-1">
         <h6>Newsletter</h6>
         <form action="">
           <input class="newsletter" type="text">
           <button class="newsletter-btn">
             envoyer
           </button>
         </form>
       </div>
     </div>
   </div>
   @include('shared.bfooter')