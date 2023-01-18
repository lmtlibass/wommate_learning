

@extends('layouts/auth')
@section('title')
    Login
@endsection

@section('content')
    <div class="card-img" >
       <img src="{{URL::asset('img/login_bg.jpg')}}" alt="login"> 
    </div>
    

    <div class="card-form" style="width: 100%; padding: 4%">
        <a href="/" class="mb-5 flex">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg><strong class="text-red-500">wommate</strong>
        </a>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger p-0">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-groups">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input aria-describedby="emailHelpBlock" id="email" type="email"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="email"
                       placeholder="Enter Email" tabindex="1"
                       value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}" autofocus
                       required>
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            </div>

            <div class="form-group">
                <div class="d-block">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <div class="float-right">
                        <a href="{{ route('password.request') }}" class="text-small">
                            Mot de pass oublié?
                        </a>
                    </div>
                </div>
                <input aria-describedby="passwordHelpBlock" id="password" type="password"
                       value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}"
                       placeholder="Enter Password"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password"
                       tabindex="2" required>
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            </div>

            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                           id="remember"{{ (Cookie::get('remember') !== null) ? 'checked' : '' }}>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="remember">Remember Me</label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" tabindex="4">
                    Connecter
                </button>
            </div>
        </form>
    </div>
@endsection

