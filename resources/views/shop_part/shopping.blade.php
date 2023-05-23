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

        <h1><a href="{{ route('new') }}" class="header__txt--2">Add New Product!</a></h1>
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
          <div class="item item1">
            <img
              class="product__img"
              src="https://i.pinimg.com/564x/4d/8c/7f/4d8c7fba815fe0ab86c02702bdabc8ea.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Kabyle dress</h3>
              <h3 class="product__price">4300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item2">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1649109669957-d800d6b99fe5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YWxnZXJpYW4lMjBkcmVzc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">Blue Caftan</h3>
              <h3 class="product__price">9700DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item3">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1649109669063-e0bd1b293fae?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGFsZ2VyaWFuJTIwZHJlc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">Cherry Mesh Caftan</h3>
              <h3 class="product__price">14,300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item4">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1649109670021-2e9e3adbe795?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGFsZ2VyaWFuJTIwZHJlc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">Beige Caftan</h3>
              <h3 class="product__price">14,300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item5">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1649109669093-90726a95c606?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGFsZ2VyaWFuJTIwZHJlc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">Light blue Goldish Caftan</h3>
              <h3 class="product__price">19,300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item6">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1649109669258-84a962e88a32?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGFsZ2VyaWFuJTIwZHJlc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">Royal Blue Caftan</h3>
              <h3 class="product__price">17,300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item7">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1649109668548-a7f59c92585d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGFsZ2VyaWFuJTIwZHJlc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">Black Brodded Dress</h3>
              <h3 class="product__price">8500DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item8">
            <img
              class="product__img"
              src="https://i.pinimg.com/564x/a5/d4/6c/a5d46c422585a95e65a1081a3ddb43c1.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">V-neck Mermaid Red</h3>
              <h3 class="product__price">11,000DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
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
          <div class="item item1">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1594981449006-3bb015dd305a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YWxnZXJpYW4lMjBmb29kfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">BaQlawa</h3>
              <h3 class="product__price">1000DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item2">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1541518763669-27fef04b14ea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y291c2NvdXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">CousCous Viande</h3>
              <h3 class="product__price">800DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item3">
            <img
              class="product__img"
              src="https://i.pinimg.com/236x/96/37/4b/96374b4e368b422795d888d314818347.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">CousCous Poulet</h3>
              <h3 class="product__price">700DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item4">
            <img
              class="product__img"
              src="https://i.pinimg.com/236x/92/e9/c1/92e9c1c075c6d02b544dc9e2f622e7d7.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Ma7chi</h3>
              <h3 class="product__price">200DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item5">
            <img
              class="product__img"
              src="https://i.pinimg.com/236x/9c/e7/c9/9ce7c9e8c455c3bf5137b47bae03bcc4.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Kessra</h3>
              <h3 class="product__price">100DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item6">
            <img
              class="product__img"
              src="https://i.pinimg.com/236x/45/51/ac/4551ac0e8928d52237064477f1791db0.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">BerkouKes</h3>
              <h3 class="product__price">1300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item7">
            <img
              class="product__img"
              src="https://i.pinimg.com/236x/f3/d4/16/f3d416b2629bcafa5fa7776e66e032a5.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">CheKhchouKha</h3>
              <h3 class="product__price">1200DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item8">
            <img
              class="product__img"
              src="https://i.pinimg.com/236x/32/c0/e5/32c0e5198e909cdd8b5356e95924fb99.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">MbarDja</h3>
              <h3 class="product__price">350DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
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
          <div class="item item1">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1671642883395-0ab89c3ac890?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXJhYiUyMGpld2Vscnl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">Bloody Miss</h3>
              <h3 class="product__price">2500DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item2">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
            />
            <div class="product__info">
              <h3 class="product__title">Ocean Blue</h3>
              <h3 class="product__price">2300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item3">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1535632787350-4e68ef0ac584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">RoYal Set x4</h3>
              <h3 class="product__price">4500DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item4">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1536232038510-337303acd6e0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEyfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">Grenadine</h3>
              <h3 class="product__price">3300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item5">
            <img
              class="product__img"
              src="https://i.pinimg.com/736x/e4/52/a8/e452a875746843f3d8252c104c4c24f5.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Kabyle Heady</h3>
              <h3 class="product__price">1300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item6">
            <img
              class="product__img"
              src="https://i.pinimg.com/564x/d1/47/36/d14736044f1ab7be29b73145d2f0b64c.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Melange</h3>
              <h3 class="product__price">8000DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item7">
            <img
              class="product__img"
              src="https://i.pinimg.com/736x/ef/5c/14/ef5c149ee2eafb953c2152a61366b88e.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Fleurs Precieuses</h3>
              <h3 class="product__price">9300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item8">
            <img
              class="product__img"
              src="https://i.pinimg.com/736x/b3/6b/fd/b36bfdfe367dda2adf34b2cba89d485a.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Toscane</h3>
              <h3 class="product__price">11,300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
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
        <div class="sec__content"> <div class="item item1">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1671642883395-0ab89c3ac890?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXJhYiUyMGpld2Vscnl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">Bloody Miss</h3>
              <h3 class="product__price">2500DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item2">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
            />
            <div class="product__info">
              <h3 class="product__title">Ocean Blue</h3>
              <h3 class="product__price">2300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item3">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1535632787350-4e68ef0ac584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">RoYal Set x4</h3>
              <h3 class="product__price">4500DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item4">
            <img
              class="product__img"
              src="https://images.unsplash.com/photo-1536232038510-337303acd6e0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEyfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"
            />
            <div class="product__info">
              <h3 class="product__title">Grenadine</h3>
              <h3 class="product__price">3300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item5">
            <img
              class="product__img"
              src="https://i.pinimg.com/736x/e4/52/a8/e452a875746843f3d8252c104c4c24f5.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Kabyle Heady</h3>
              <h3 class="product__price">1300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item6">
            <img
              class="product__img"
              src="https://i.pinimg.com/564x/d1/47/36/d14736044f1ab7be29b73145d2f0b64c.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Melange</h3>
              <h3 class="product__price">8000DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item7">
            <img
              class="product__img"
              src="https://i.pinimg.com/736x/ef/5c/14/ef5c149ee2eafb953c2152a61366b88e.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Fleurs Precieuses</h3>
              <h3 class="product__price">9300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
          <div class="item item8">
            <img
              class="product__img"
              src="https://i.pinimg.com/736x/b3/6b/fd/b36bfdfe367dda2adf34b2cba89d485a.jpg"
            />
            <div class="product__info">
              <h3 class="product__title">Toscane</h3>
              <h3 class="product__price">11,300DA</h3>
            </div>
            <p class="product__desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
              Minus iure eligendi.
            </p>
          </div>
        </div></div>
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
