<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/login.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Fugaz One"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Jost"
      rel="stylesheet"
    />
  </head>

 <body>
    <div class="upper">
      <img class="page__logo" src="pics/bladna.png" />
      <h1 class="main__txt">Welcome Back</h1>
      <h4 class="log__txt">Log In to Continue</h4>
    </div>
 <div class="center__main">
     <div class="sec__form form--1">
<form method="POST" action="{{ route('login') }}">
      @csrf
     <div class="input--1">
          <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label><br/>
          <input
           id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
             @error('email')
=======
@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
<<<<<<< HEAD
        </div>
          <div class="input--2">
             <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label><br/>
          <input
           id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
             @error('password')
=======
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
<<<<<<< HEAD
        </div>
        </div>
          <a><button type="submit" class="form__btn">Log In</button></a>
    <h2 class="forget__txt">
        @if (Route::has('password.request'))
        {{-- will add the forgot password later ! --}}
                                    {{-- Did You <a class="overlay" href="{{ route('password.request') }}">
                                        <span class="overlay">don't have an account ?</span>
                                    </a> --}}
                                    don't have an account ? <a class="overlay" href="{{asset("register")}}">
                                        <span class="overlay" >Sign up here</span>
                                    </a>
                                @endif
     </form>

    </div>
=======
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
