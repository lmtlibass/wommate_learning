{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.auth')
@section('title')
    Register
@endsection
@section('content')
        
        <div class="card-img" >
            <img src="{{URL::asset('img/login_bg.jpg')}}" alt="login"> 
        </div>
   
        <div class="card-form" style="width: 100%; padding: 4%">
            <a href="/" class="mb-5 flex">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg><strong class="text-red-500">wommate</strong>
            </a>
            <form method="POST" action="{{ route('register') }}" >
                @csrf
               <div class="row">
                    <div class="flex">
                        <div class="form-groups flex-1 flex-col">
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Prenom<strong
                                    class="text-red-500">*</strong></label>
                            <input id="firstName" type="text"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   name="first_name"
                                   tabindex="1" placeholder="Prenom" value="{{ old('name') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('first_name', 'verifier ') }}
                            </div>
                        </div>
                        <div class="form-groups flex-1 flex-col ml-2">
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Nom<strong
                                    class="text-red-500">*</strong></label>
                            <input id="last_name" type="text"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   name="last_name"
                                   tabindex="1" placeholder="Nom" value="{{ old('name') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('first_name', 'verifier ') }}
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex">
                        <div class="form-group flex-1 flex-col">
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Pseudo<strong
                                class="text-red-500">*</strong></label>
                            <input id="username" type="text"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Entrer votre pseudo" 
                                   name="username" tabindex="1"
                                   value="{{ old('username') }}"
                                   required autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('username') }}
                            </div>
                        </div>
                        <div class="form-group flex-1 flex-col ml-2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Email<strong
                                class="text-red-500">*</strong></label>
                            <input id="email" type="email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Entrer votre address email" 
                                   name="email" tabindex="1"
                                   value="{{ old('email') }}"
                                   required autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="form-group">
                            <label for="password"class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                                <strong
                                    class="text-red-500">*</strong</label>
                            <input id="password" type="password"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Entrez votre password" 
                                   name="password" tabindex="1" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="password_confirmation"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmer votre mot de pass <strong
                            class="text-red-500">*</strong></label>
                            <input id="password_confirmation" type="password" placeholder="Confirm account password"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   name="password_confirmation" tabindex="2">
                            <div class="invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        </div>
                    </di flex-1v> 
                    <div class="mt-4">
                        <div class="form-group">
                            <input type="submit" value="s'inscrire" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" tabindex="4">
                        </div>
                    </div>
                </div> 
                
            </form>
            <div class="-mt-9 text-muted text-center">
                Déja un compte ? <a
                        href="{{ route('login') }}">S'inscrire</a>
            </div>
        </div>
@endsection
