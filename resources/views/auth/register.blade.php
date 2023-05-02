<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BLADNA REGISTER</title>
    <link rel="stylesheet" href="/assets/css/sign.css"/>

    <link
      href="https://fonts.googleapis.com/css?family=Fugaz One"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Jost"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/css/sign.css">
    <script defer src="/assets/js/sign.js"></script>
  </head>



  <body>
 <form  method="POST" action="{{ route('register') }}"> 
   <div class="body__left">
        <div class="head">

            <img class="left__logo" src="pics/bladna.png" />
            <h1 class="left_title">BLADNA REGISTRATION</h1>
        </div>

      <div class="left__form">
      @csrf
  <div class="input--1">

              <label for="email">{{ __('E-mail :') }}</label><br />
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
              </div>
              <br />
   <div class="input--2"> 
         <label  for="password">{{ __('Password :') }}</label><br />
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
        </div>
        <br />
         <div class="input--3">
        <label for="password-confirm">Confirm Password :</label><br />
          <input
            type="password"
            placeholder="********"
            id="password-confirm"
             class="form-control"
            name="password_confirmation"
            required autocomplete="new-password"
            value="{{old('password_confirmation')}}"
          />
          @error('password_confirmation')
                    <P class="text-yellow-500 text-xs mt-1">{{$message}}</P>
          @enderror
        </div>
        </div>
        <div class="last">
           <div class="left__back">
            <input type="submit" value="Sign Up" class="form__btn">
          </div>
        {{-- login part  --}}
          <div class="sec__footer">
          <h3>
          Already have an account ? 
          <a href="{{asset('login')}} " class="txt__overlay--1" >Log In
          </a>
          </h3>
         </div>
         </div>

        
       </div>
       <div class="body__right">
      <h1 class="right__title">
        Dive Deep Into The Algerian
        <span class="right__overlay"> Culture</span> !
      </h1>
    <div class="right__form">
  <div class="right__form__left">
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
           <div class="right__form__right">
            <div class="input--4">
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
        <div class="txt">
            <h6 class="credits">@signup.here</h6>
            <h6 class="credits">Signup@bladna.dz</h6>
        </div>
            <div class="form__social">
                <div class="social social__likes">
                    <img class="likes__icon" src="pics/heart.png">
                    <h5>Likes</h5>
                </div>
                <div class="social social__comm">
                    <img class="comm__icon" src="pics/com.png">
                    <h5>Comments</h5>
                </div>
                <div class="social social__follow">
                    <img class="follow__icon" src="pics/follow.png">
                    <h5>Followers</h5>
                </div>
            </div>
        </div>
    </div>
    </div>
  </form>
  </body>
</html>