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
</style>

<div class="flex bg-white w-full h-full border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
     <div class="flex-auto ">
          <img class="img w-96 h-full object-cover"  src="{{$event->media}}" alt="{{$event->titre}}">
     </div>
     <div class="flex-auto my-10 mx-10 w-96">
          <h2 class="text-red-300">
               {{$event->title}}</h2>
          <p class="mt-4">
               {{$event->description}}</p>
          <p class="mt-4">
               {{$event->eventDate}}</p>
     </div>
</div>