<style>
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
          display: block;
          color: #fff;
          padding: 16px;
          text-decoration: none;
          display: flex;
          align-items: center;
          border-bottom: 0.5px solid rgb(223, 223, 223);
     }

     .sidebar a img {
          width: 20px;
          height: 20px;
          margin-right: 5px;
          
     }

     .sidebar a.active {
          border-bottom: 3px solid #E5EA00;
          color: white;
          transition: 2s;
     }

     .sidebar a:hover:not(.active) {
          border-bottom: 3px solid #E5EA00;
          color: #FA8316;
          margin-left: 2%;
          transition: 1s;     
     }
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

<div class="sidebar">
     <a  href="{{Route('home')}}">
          <img src="{{URL::asset('img/home.png')}}" alt="/">Accueil
     </a>
     <a href="{{Route('admin.user.index')}}" class="active">
          <img src="{{URL::asset('img/users.png')}}" alt=""> User</a>
     <a href=""> 
          <img src="{{URL::asset('img/coursi.png')}}" alt=""> Cours</a>
     <a href="#about">
          <img src="{{URL::asset('img/eventi.png')}}" alt=""> Evenements</a>
</div>
