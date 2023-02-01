{{-- <style>
     .sidebar {
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #0091B1;
          position: fixed;
          height: 100%;
          overflow: auto;
     }

     .sidebar a {
          color: #fff;
          padding: 6px 8px 6px 16px;
          text-decoration: none;
          font-size: 20px;
          display: block;
     }

     .sidebar a img {
          width: 15px;
          height: 15px;
          margin-right: 5px;
          
     }

     .sidebar a.active {
          background:#E5EA00;
          color: white;
          transition: 2s;
     }

     .sidebar a:hover:not(.active) {
          background:#E5EA00;
          color: #FA8316;
          margin-left: 2%;
          transition: 1s;     
     }
          <div class="dropdown-container">
     <a href="#">Link 1</a>
     <a href="#">Link 2</a>
     <a href="#">Link 3</a>
     </div>
     @media screen and (max-width: 700px) {
               .sidebar {
                    width: 100%;
                    height: auto;
                    position: relative;
               }

               .sidebar a {
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                   
               }
          }

          @media screen and (max-width: 400px) {
               .sidebar a {
                    text-align: center;
                    float: none;
               }
          }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<div class="sidebar">
     <a  href="{{Route('home')}}" >
          <img src="{{URL::asset('img/home.png')}}" alt="/">
          Accueil</a>
     <a href="{{Route('admin.user.index')}}" class="active mt-5">
          <i class="bi bi-people"></i>
          User</a>
     @can('administration')
          <button class="dropdown-btn">Cours 
               <i class="bi bi-chevron-down"></i>
          </button>
          <div class="dropdown-container">
               <a href="">liste cours</a>
               <a href="">Nouveau cours</a>     
          </div>
     @endcan
     @can('creator_access')        
     <a href="{{route('mycours')}}" class="mt-1"> 
          <img src="{{URL::asset('img/coursi.png')}}" alt=""> 
          Mes Cours</a>
     @endcan
     <a href="" class="mt-1">
          <img src="{{URL::asset('img/eventi.png')}}" alt=""> 
          Evenements</a>
</div>
<script>
     /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
     var dropdown = document.getElementsByClassName("dropdown-btn");
     var i;
     
     for (i = 0; i < dropdown.length; i++) {
       dropdown[i].addEventListener("click", function() {
         this.classList.toggle("active");
         var dropdownContent = this.nextElementSibling;
         if (dropdownContent.style.display === "block") {
           dropdownContent.style.display = "none";
         } else {
           dropdownContent.style.display = "block";
         }
       });
     }
     </script> --}}

<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

     <style>
          body {
               font-family: "Lato", sans-serif;
          }

          /* Fixed sidenav, full height */
          .sidenav {
               height: 100%;
               width: 200px;
               position: fixed;
               z-index: 1;
               top: 0;
               left: 0;
               background-color: #111;
               overflow-x: hidden;
               padding-top: 20px;
          }

          /* Style the sidenav links and the dropdown button */
          .sidenav a,
          .dropdown-btn {
               padding: 6px 8px 6px 16px;
               text-decoration: none;
               font-size: 18px;
               color: #f5f5f5;
               display: block;
               border: none;
               background: none;
               width: 100%;
               text-align: left;
               cursor: pointer;
               outline: none;
          }

          /* On mouse-over */
          .sidenav a:hover,
          .dropdown-btn:hover {
               color: #f1f1f1;
          }

          /* Main content */
          .main {
               margin-left: 200px;
               /* Same as the width of the sidenav */
               font-size: 20px;
               /* Increased text to enable scrolling */
               padding: 0px 10px;
          }

          /* Add an active class to the active dropdown button */
          .active {
               background-color: #0091B1;
               color: white;
          }

          /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
          .dropdown-container {
               display: none;
               background-color: #262626;
               padding-left: 8px;
          }
          .dropdown-container a {
               color: #f5f5f5;
               padding: 12px 16px;
               font-size: 14px !important;
               text-decoration: none;
               display: block;
               font-size: 18px;
          }

          /* Optional: Style the caret down icon */
          .fa-caret-down {
               float: right;
               padding-right: 8px;
          }

          /* Some media queries for responsiveness */
          @media screen and (max-height: 450px) {
               .sidenav {
                    padding-top: 15px;
               }

               .sidenav a {
                    font-size: 18px;
               }
          }
     </style>
</head>

<body>
     <div class="sidenav">
          <a href="{{route('home')}}">
               <i class="bi bi-house-door-fill mr-2"></i>
               Accueil</a>
          <a href="{{route('admin.user.index')}}">
               <i class="bi bi-person-bounding-box mr-2"></i>
               Users</a>
          <button class="dropdown-btn">
               <i class="bi bi-file-code mr-2"></i>
               Cours
               <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
               <a href="{{route('createur.cour.index')}}">
                    <i class="bi bi-list-columns mr-2"></i>
                    Liste des cours</a>
               <a href="{{route('createur.cour.create')}}">
                    <i class="bi bi-folder-plus mr-2"></i>
                    Ajouter cours</a>
          </div>
          <button class="dropdown-btn">
               <i class="bi bi-calendar-event-fill mr-2"></i>
               Evenements
               <i class="fa fa-caret-down mr-2"></i>
          </button>
          <div class="dropdown-container">
               <a href="#">
                    <i class="bi bi-list-nested mr-2"></i>
                    Liste des evnmts</a>
               <a href="#">
                    <i class="bi bi-file-plus mr-2"></i>
                    Ajouter evenement</a>
          </div>
          <a href="#contact">Search</a>

          <div class="text-white mt-80">
               <a href="#">
                    <i class="bi bi-box-arrow-right mr-2"></i>
                    Deconnexion</a>
          </div>
     </div>

     

     <script>
          /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
          var dropdown = document.getElementsByClassName("dropdown-btn");
          var i;

          for (i = 0; i < dropdown.length; i++) {
               dropdown[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                         dropdownContent.style.display = "none";
                    } else {
                         dropdownContent.style.display = "block";
                    }
               });
          }
     </script>

</body>

</html>
