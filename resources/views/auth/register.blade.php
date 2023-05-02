<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<<<<<<< HEAD
    <title>BLADNA REGISTER</title>
=======
    <link rel="stylesheet" href="/assets/css/sign.css"/>

>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
    <link
      href="https://fonts.googleapis.com/css?family=Fugaz One"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Jost"
      rel="stylesheet"
    />
<<<<<<< HEAD
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
=======
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
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
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
<<<<<<< HEAD
              </div>
              <br />
   <div class="input--2"> 
         <label  for="password">{{ __('Password :') }}</label><br />
           <input
=======
          <br />
          <label  for="password">{{ __('Password') }}</label><br />
          <input
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
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
<<<<<<< HEAD
        </div>
        <br />
         <div class="input--3">
        <label for="password-confirm">Confirm Password :</label><br />
=======
          <br />
          <label for="password-confirm">Confirm Password :</label><br />
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
          <input
            type="password"
            placeholder="********"
            id="password-confirm"
             class="form-control"
            name="password_confirmation"
            required autocomplete="new-password"
<<<<<<< HEAD
            value="{{old('password_confirmation')}}"
=======
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
          />
          @error('password_confirmation')
                    <P class="text-yellow-500 text-xs mt-1">{{$message}}</P>
          @enderror
        </div>
<<<<<<< HEAD
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
=======
        <!-- PHASE 2 -->
        <div class="sec__form form--2 hidden">
          <div class="sec__form__photo">
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
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
<<<<<<< HEAD
        </div>
           <div class="right__form__right">
            <div class="input--4">
           <label for="name">Username :</label><br />
            <input
              type="text"
=======
          </div>

          <label for="name">Username :</label><br />
          <input
            type="text"
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
            placeholder="@example"
            id="name"
            class="form-control @error('name') is-invalid @enderror" 
            name="name"
            required autocomplete="name" autofocus
             value="{{old('name')}}"
<<<<<<< HEAD
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
=======
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

>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
</html>