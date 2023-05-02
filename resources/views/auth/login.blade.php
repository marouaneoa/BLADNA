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
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
          <div class="input--2">
             <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label><br/>
          <input
           id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
