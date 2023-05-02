<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('/assets/css/styles.css')}}" />
    <link
      href="https://fonts.googleapis.com/css?family=Fugaz One"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Jost"
      rel="stylesheet"
    />

    <title> @yield('title') </title>
    <link rel="icon" href="{{asset('pics/bladna.png')}}" />
<<<<<<< HEAD
    <script defer src="{{asset('/assets/js/script.js')}}"></script>
    <script src="{{asset('/assets/mapdata.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/countrymap.js')}}"></script>
    

=======
    
    <script defer src="{{asset('/assets/js/script.js')}}"></script>
    <script src="{{asset('/assets/mapdata.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/countrymap.js')}}"></script>
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
   
  </head>
  <body>
    <header class="header">
      <nav class="nav__items">
        <div class="nav__logo">
          <img class="nav__logo" src="{{asset('/pics/bladna.png')}}" alt="Bladna Logo" />
          <h2 class="nav__txt">بلادنا</h2>
        </div>

        <ul class="nav__links">
          <li class="nav__item"><a class="activee" href="#">Home</a></li>
          <li class="nav__item"><a href="#section--2">Shop</a></li>
          <li class="nav__item"><a href="#section--3">Explore</a></li>
          <li class="nav__item"><a href="#footer">Contact Us</a></li>
        </ul>
        @guest
<<<<<<< HEAD
          <div class="nav__btns">
           @if (Route::has('login'))
            
              <a class="nav__btn--1" href="{{ route('login') }}">{{ __('Log In') }}</a>
=======
           @if (Route::has('login'))
            
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
            
          @endif

            @if (Route::has('register'))
            
<<<<<<< HEAD
               <a href="{{ route('register') }}"  class="nav__btn--2">{{ __('Sign Up') }}</a>
              @endif
              </div>
             @else
               <div class="nav__btns">
                
              <div class="nav__btn--1"  id="myBtn">Become Vendor</div>
             <a class="nav__btn--2" href="{{ route('logout') }}"
=======
               <a href="{{ route('register') }}">{{ __('Register') }}</a>
              
              @endif
             @else
             <span class="font-bold uppercase">
                Welcome {{ Auth::user()->name }}
              </span>

           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="{{ route('logout') }}"
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
<<<<<<< HEAD
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
                    <label for="phone">Phone Number :</label><br />

                    <input
                      type="tel"
                      placeholder="+213 000 000 000"
                      id="tel"
                      name="tel"
                    />
                    <button type="submit" class="modal__btn">Log In</button>
                  </form>
              </div>
            </div>
          </div>
=======
               @csrf
              </form>
              </div>
            </li>
            @endguest

       
      </nav>
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350

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
<<<<<<< HEAD
           href="{{asset('register')}}"
=======
            href="users/register"
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
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
</body>
</html>
