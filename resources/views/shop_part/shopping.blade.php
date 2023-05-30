<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bladna | Shop Traditionallty !</title>
    <link rel="stylesheet" href="/assets/css/shopping.css" />
    <script defer src="/assets/js/shopping.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Fugaz One"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Jost"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/css.gg@2.0.0/icons/css/carousel.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="nav__items">
      <div class="nav__logo">
        <img class="nav__logo" src="/pics/bladna.png" alt="Bladna Logo" />
        <h2 class="nav__txt">بلادنا</h2>
      </div>

      <ul class="nav__links">
        <li class="nav__item"><a href="#">Home</a></li>
        <li class="nav__item">
          <a class="activee" href="#section--2">Shop</a>
        </li>
        <li class="nav__item"><a href="#section--3">Explore</a></li>
        <li class="nav__item"><a href="#footer">Contact Us</a></li>
      </ul>
      <div class="nav__btns">
        <div class="nav__btn--1">Become Vendor</div>
          <a href="{{ route('register') }}"  class="nav__btn--2">{{ __('Sign Up') }}</a>
      </div>
    </nav>
    

    <header id="header">
      <div class="header__txt">
        <h1 class="header__txt--1">Shop Traditionally !</h1>

        <h1><a href="{{ route('new_product') }}" class="header__txt--2">Add New Product!</a></h1>
      </div>
      <div class="header__search">
        <div class="search__bar">
          <div class="header">
            <form class="search">
              <i class="gg-carousel"></i>
              <input type="text" class="search__input" placeholder="Search" />
              <svg style="width: 32px; height: 32px" viewBox="0 0 24 24">
                <path
                  fill="#666666"
                  d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"
                />
              </svg>
            </form>
          </div>
        </div>
      </div>
      <div class="sec__cloth">
        <h3>Browse Traditional Clothing:</h3>
        <div class="sec__content">
        @if( count($items )>0)
        @foreach($items as $item)
                @if($item->category == "Clothes") 
                
          <div class="item item1">
          @foreach($p_img as $image)
          @if($image->item_id == $item->id) 
              <img class="product__img" src="{{ Storage::url('public/item_images/' . $image->image_path) }}" alt="{{ $item->name }}">
              @break
          @endif
                  @endforeach
                    <div class="product__info">
                      <h3 class="product__title">{{$item->name}}</h3>
                      <h3 class="product__price">{{$item->price}}DA</h3>
                    </div>
                    <p class="product__desc">
                    {{$item->description}}
                    </p>
                  </div>
         
                @endif
                @endforeach
                @else
                      <p>No items available.</p>
                  @endif
          </div>
          </div>
      <div class="main__buttons">
        <div class="main_btn--1">See More</div>
        <div class="main_btn--2">
          Nothing interesting ?
           <span class="btn__span"><a href="/shop_part/custome_shop">Custom Shop Here !</a></span>
        </div>
      </div>
      <div class="sec__dish">
        <h3>Browse Traditional Dishes:</h3>
        <div class="sec__content">
        @if( count($items )>0)
        @foreach($items as $item)
        @if($item->category == "Food") 
          <div class="item item1">
          @foreach($p_img as $image)
                      @if($image->item_id == $item->id ) 
                      <img class="product__img" src="{{ Storage::url('public/item_images/' . $image->image_path) }}" alt="{{ $item->name }}">
                          @break
                      @endif
                  @endforeach
            <div class="product__info">
              <h3 class="product__title">{{$item->name}}</h3>
              <h3 class="product__price">{{$item->name}}DA</h3>
            </div>
            <p class="product__desc">
            {{$item->description}}
            </p>
          </div>
          @endif
                @endforeach
                @else
                      <p>No items available.</p>
                  @endif

          
      </div>
      </div>
      <div class="main__buttons">
        <div class="main_btn--1">See More</div>
        <div class="main_btn--2">
          Nothing interesting ?
          <span class="btn__span"><a href="/shop_part/custome_shop">Custom Shop Here !</a></span>
        </div>
      </div>
      <div class="sec__jewel">
        <h3>Browse Traditional Jewerly:</h3>
        <div class="sec__content">
        @if( count($items )>0)
        @foreach($items as $item)
        @if($item->category == "Jewerly")
          <div class="item item1">
          @foreach($p_img as $image)
                      @if($image->item_id == $item->id ) 
                      <img class="product__img" src="{{ Storage::url('public/item_images/' . $image->image_path) }}" alt="{{ $item->name }}">
                          @break
                      @endif
                  @endforeach
            <div class="product__info">
              <h3 class="product__title">{{$item->name}}</h3>
              <h3 class="product__price">{{$item->price}}DA</h3>
            </div>
            <p class="product__desc">
            {{$item->description}}
            </p>
          </div>
          @endif
                @endforeach
                @else
                      <p>No items available.</p>
                  @endif
          
      </div>
      </div>
      <div class="main__buttons">
        <div class="main_btn--1">See More</div>
        <div class="main_btn--2">
          Nothing interesting ?
           <span class="btn__span"><a href="/shop_part/custome_shop">Custom Shop Here !</a></span>
        </div>
      </div>

      <div class="sec__deco">
        <h3>Browse Traditional Decoration:</h3>
        @if( count($items )>0)
        @foreach($items as $item)
        @if($item->category == "Decoration")
        <div class="sec__content"> <div class="item item1">
        @foreach($p_img as $image)
                      @if($image->item_id == $item->id ) 
                      <img class="product__img" src="{{ Storage::url('public/item_images/' . $image->image_path) }}" alt="{{ $item->name }}">
                          @break
                      @endif
                  @endforeach
            <div class="product__info">
              <h3 class="product__title">{{$item->name}}</h3>
              <h3 class="product__price">{{$item->price}}DA</h3>
            </div>
            <p class="product__desc">
            {{$item->description}}
            </p>
          </div>
          @endif
                @endforeach
                @else
                      <p>No items available.</p>
                  @endif
          
      </div>
      </div>
      <div class="main__buttons">
        <div class="main_btn--1">See More</div>
        <div class="main_btn--2">
          Nothing interesting ?
           <span class="btn__span"><a href="/shop_part/custome_shop">Custom Shop Here !</a></span>
        </div>
      </div>
    </header>

    <footer class="footer" id="footer">
        <div class="footer__items">
          <div class="footer__item footer__creditentials">
            <img class="nav__logo" src="/pics/bladna.png" alt="Bladna Logo" />
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
              Shop The Algerian Culture !
            </h3>
            <div class="search__bar ">
                <div class="header">
                  <form class="search">
                    <i class="gg-carousel"></i>
                    <input type="text" class="search__input--ft" placeholder="Search" />
                    <svg style="width: 32px; height: 32px" viewBox="0 0 24 24">
                      <path
                        fill="#666666"
                        d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"
                      />
                    </svg>
                  </form>
                </div>
              </div>
          </div>
  
          <div class="footer__item">
            <h3 class="footer__item--txt2">Get In Touch</h3>
            <div class="footer__item--txt3">
              <h6>E-Mail : <span>bladnadz@bilady.dz</span></h6>
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
