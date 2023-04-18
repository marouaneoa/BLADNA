<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/sign.css"/>

    <link
      href="https://fonts.googleapis.com/css?family=Fugaz One"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Jost"
      rel="stylesheet"
    />
    <title>Sign Up</title>
    <link rel="icon" href="/pics/bladna.png" />
    <script defer src="/assets/js/sign.js"></script>
  </head>
  <body>
    <section class="split sec__photo" id="photo">
      <h1 class="sec__txt--1" id="maintxt">
        Dive Deep Into BLADNA's
        <span class="txt__overlay" id="subtxt">Culture </span> !
      </h1>
    </section>
    <div class="card-header">{{ __('Register') }}</div>
    
    <section class="split sec__sign">
    <form method="POST" action="{{ route('register') }}"> 

      @csrf

      <div class="sec__right">
        <h1 class="sec__txt--2">SIGN UP</h1>
        <div class="sec__form form--1 " id="form">

          <label for="email">{{ __('Email Address') }}</label><br />
          <input
            type="email"
            placeholder="abcdef@example.com"
            class="form-control @error('email') is-invalid @enderror"
            id="email"
            name="email"
            required autocomplete="email"
          value="{{old('email')}}"/>
            @error('email')
                    <P class="text-yellow-500 text-xs mt-1"><strong>{{ $message }}</strong></P>
                @enderror
          <br />
          <label  for="password">{{ __('Password') }}</label><br />
          <input
            type="password"
            placeholder="********"
            class="form-control @error('password') is-invalid @enderror" 
            id="password"
            name="password"
            required autocomplete="new-password"
            value="{{old('password')}}"
          />
          @error('password')
                    <P class="text-yellow-500 text-xs mt-1"> <strong>{{ $message }}</strong></P>
          @enderror
          <br />
          <label for="password-confirm">Confirm Password :</label><br />
          <input
            type="password"
            placeholder="********"
            id="password-confirm"
             class="form-control"
            name="password_confirmation"
            required autocomplete="new-password"
          />
          @error('password_confirmation')
                    <P class="text-yellow-500 text-xs mt-1">{{$message}}</P>
          @enderror
        </div>
        <!-- PHASE 2 -->
        <div class="sec__form form--2 hidden">
          <div class="sec__form__photo">
            <img id="sec__photo__container"></img>
            <br>
            <label for="image-input" class="form__photo__label">Upload Your Photo</label>
            <br>
            <input
              type="file"
              name="image"
              accept="image/png, image/jpeg"
              id="image-input"
            />
          </div>

          <label for="name">Username :</label><br />
          <input
            type="text"
            placeholder="@example"
            id="name"
            class="form-control @error('name') is-invalid @enderror" 
            name="name"
            required autocomplete="name" autofocus
             value="{{old('name')}}"
          />
          @error('name')
                    <P class="text-yellow-500 text-xs mt-1">{{$message}}</P>
                @enderror
        </div>
        <div class="sec__btn ">Next</div>
      </div>
      <div class="sec__footer">
        <img class="sec__logo" src="pics/bladna.png" />
        <h3>
          Already have an account ? 
          <a href="/auth/login" class="txt__overlay--1" >Log In
          </a>
        </h3>
      </div>

      <div class="sec__end hidden" >
        <h1 class="end__txt">COMPLETE</h1>
        <button type="submit" 
        class="end__btn">GET STARTED</button>

      </div>
    </form>
    </section>
  </body>

</html>