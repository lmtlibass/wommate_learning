@if (session('status'))
<div class="alert alert-success" role="alert">
     {{ session('status') }}
</div>
@endif


@extends('admin.base.app')

@section('sidebar')
    <div class="flex">
      <div class="flex-col w-52 h-screen fixed bg-gray-500">

      </div>
    </div>
@endsection

@section('nav')
    <div class="flex w-full h-10 bg-red-300">

    </div>
@endsection

@section('content')
    <div class="w-full p-10 h-auto bg-blue-300">
    </div>
@endsection