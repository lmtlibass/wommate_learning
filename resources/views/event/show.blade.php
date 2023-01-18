<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>

<style>
     body{
          background: rgb(250,250,250);
          background: radial-gradient(circle, rgba(250,250,250,1) 0%, rgb(217, 217, 218) 52%, rgba(254,254,254,1) 100%);
          padding: 4%;
     }
     .img{
          border-radius: 8px 0 0 8px;
     }
     h2{
          color: #0091B1;
          border-bottom: 3px solid #E5EA00;
          font-weight: bold;
     }
     .ateur{
          padding: 12px;
          background: #E5EA00;
     }
     .back img{
          width: 30px;
          height: 30px;
          margin-bottom: 2%;
          cursor: pointer;
     }

</style>

<div class="flex bg-white w-full h-full border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
     <div class="flex-auto ">
          <img class="img w-4/5 h-full object-cover"  src="{{$event->media}}" alt="{{$event->titre}}">
     </div>
     <div class="flex-auto my-10 mx-10 w-96 flex-col">
          <div onclick="location.href='{{url('event')}}'" class="back">
               <img src="{{URL::asset('img/backs.png')}}" alt="">
          </div>

          <h2 class=" flex-1 mt-5">
               {{$event->title}}</h2>
          <p class="mt-8 text-left flex-1">
               {{$event->description}}</p>
          <p class="mt-4 flex-1 text-2xl">
               {{$event->eventDate}}</p>
          <p class="mt-10 ateur">
               Auteur: 
               <strong>
                    {{$event->user->first_name}} {{$event->user->last_name}}</strong>
          </p>

         
          
     </div>
</div>