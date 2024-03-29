<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/assets/css/styles.css')}}" />
    <link
      href="https://fonts.googleapis.com/css?family=Fugaz One"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Jost"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title> @yield('title') </title>
    <link rel="icon" href="{{asset('pics/bladna.png')}}" />
    
    <script defer src="{{asset('/assets/js/script.js')}}"></script>
    <script src="{{asset('/assets/mapdata.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/countrymap.js')}}"></script>

  </head>
  <body>
    <header class="header">
      <nav class="nav__items">
        <div class="nav__logo">
          <a href="/home"><img class="nav__logo" src="{{asset('/pics/bladna.png')}}" alt="Bladna Logo" /></a>
          <h2 class="nav__txt">بلادنا</h2>
        </div>

        <ul class="nav__links">
          <li class="nav__item"><a class="activee" href="{{ route('home') }}">Home</a></li>
          <li class="nav__item"><a href="{{ route('shopping') }}">Shop</a></li>
          <li class="nav__item"><a href="#section--3">Explore</a></li>
          <li class="nav__item"><a href="#footer">Contact Us</a></li>
        </ul>
        @guest
          <div class="nav__btns">
           @if (Route::has('login'))
            
              <a class="nav__btn--1" href="{{ route('login') }}">{{ __('Log In') }}</a>

             
            
          @endif

            @if (Route::has('register'))
            
               <a href="{{ route('register') }}"  class="nav__btn--2">{{ __('Sign Up') }}</a>
              @endif
              </div>
             @else
               <div class="nav__btns">
               @auth
                  <a href="{{ route('mycart') }}" class="cart-icon">
                      <i class="fa fa-shopping-cart"></i>
                  </a>
              @endauth
                @if (auth()->user()->user_type!=="vendor")
               
              <div class="nav__btn--1"  id="myBtn" >Become Vendor</div> 

              @endif 
             <a class="nav__btn--2" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
</div>
                @csrf
              </form>
              
            </li>
            @endguest
      </nav>
               <div id="myModal" class="modal"> 
            <div class="modal-content">
              <span class="close">&times;</span>
              <div class="modal__all">
                <img class="modal__logo" src="pics/bladna.png" />
                <h1>
                 Sign Up As a <span>Vendor</span>
                </h1>
              
                  <form  class="modal__input" method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div>
                    <label for="phone">Phone Number :</label><br />

                    <input
                      type="tel"
                      placeholder="+213 000 000 000"
                      id="tel"
                      name="tel"
                    />
                  </div>
                    <button type="submit" class="modal__btn">Sign Up</button>
                  </form>
              </div>
            </div>
          </div>

@yield('main')


<footer class="footer" id="footer">
  <div class="footer__items">
    <div class="footer__item footer__creditentials">
      <img class="nav__logo" src="pics/bladna.png" alt="Bladna Logo" />
      <div class="footer__item--txt1">
        <h6>3891 Ranchview Dr. Richardson, California 62639</h6>
        <h6>(480) 555-0103</h6>
        <div class="footer__item__txt__credits">
          <h6>Bladna</h6>
          <h6>14/03/2023</h6>
        </div>
      </div>
    </div>
    <div class="footer__item">
      <h3 class="footer__item--txt2">
        Dive Deep Into The Algerian Culture !
      </h3>
      <form class="footer__form">
        <label for="mail">E-mail :</label><br />
        <div class="footer__mail">
          <input
            type="email"
            placeholder="abcdef@example.com"
            id="mail"
            name="mail"
          />
          <a
           href="{{asset('register')}}"
            class="footer__btn nav__btn--2"
          >
            Sign Up
          </a>
        </div>
      </form>
    </div>

    <div class="footer__item">
      <h3 class="footer__item--txt2">Get In Touch</h3>
      <div class="footer__item--txt3">
        <h6>E-Mail : <span>bladna.team@gmail.com</span></h6>
        <h6>Tel : <span>(+213)6 55 59 32 88</span></h6>
        <h6>Fax : <span>016 8641 46</span></h6>
      </div>
    </div>
  </div>
  <div class="footer__copyrights">
    <h3 class="copyright__txt">Copyright &#169; 2023 Bladna Team. All rights reserved </h3>
    <h3 class="copyright__txt">Logo Copyright &#169; 2023 Abdennour Achour. All rights reserved </h3>
  </div>
</footer>
@stack('scripts')

</body>
</html>
