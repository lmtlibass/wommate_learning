<nav class="mobile-topnav w-full">
     <a href="{{ url('/') }}" class="flex items-center">
          <img class="logo" src="{{URL::asset('/img/wommatLogo.png')}}" alt="">
      </a>
     <div id="myLinks">
          <a href="#/" class="active">
               Accueil</a>
          <a href="#news">
               Cours</a>
          <a href="#contact">
               Evenement</a>
          <a href="#contact">
               Mentores</a>
          {{-- <div class="dropdown">
               <button class="dropbtn">Modules 
                    <iconify-icon icon="gridicons:dropdown" style="color: #e5ea00;"></iconify-icon>
               </button>
               <div class="dropdown-content">
                    @foreach ($modules as $module)
                    <a href="">{{ $module->module_name }}</a> <br>
                    @endforeach
               </div>
          </div>  --}}
          <a href="#about">
               A propos</a>
     </div>
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <iconify-icon icon="mdi:microsoft-xbox-controller-menu" style="color: #e5ea00;" width="50" height="50"></iconify-icon>
     </a>
</nav>

{{-- *************************** --}}
<script>
     function myFunction() {
       var x = document.getElementById("myLinks");
       if (x.style.display === "block") {
         x.style.display = "none";
       } else {
         x.style.display = "block";
       }
     }
</script>