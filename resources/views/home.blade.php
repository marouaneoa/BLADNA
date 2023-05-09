@extends('layouts.app')

@section('title')
       BLADNA | Discover Algeria !
@endsection

@section ('main')
      <section class="section--1">
        <div class="sec__testimonials">
          <h2 class="sec__title" id="main__title">Marhaba !</h2>
          <p class="sec__testimonials--1">
            Algeria has a rich and diverse culture that has been shaped by its
            history and various cultural influences.<br /><br />
            The official language is Arabic, while Berber is also recognized as
            a national language, and French is widely spoken. <br />Islam is the
            dominant religion, and family plays a crucial role in Algerian
            culture, with hospitality being highly valued. Algerian cuisine is
            diverse, with couscous being the traditional dish.<br /><br />
            Other popular foods include tagines, grilled meats, and various
            types of bread. Algerian music is a blend of Arabic, Berber, and
            French styles, and traditional forms such as chaabi and rai are
            popular.<br />
            Art, including pottery and weaving, is also an important part of
            Algerian culture.
          </p>
          @guest
    <a href="{{asset('register')}} " class="sec__btn nav__btn--2">
        Sign Up
    </a>
    <a href="{{asset('login')}} " class="sec__btn nav__btn--1">
        Log In
    </a>
          @endguest

        </div>
        <div class="sec__map" id="map"> </div>
      </section>
      <img class="sec__icon--chevron" src="{{asset('/pics/chevron.png')}}" id="chevron" />
    </header>

    
    <section class="section--2" id="section--2">
      <h2 class="sec__title--3">Shop With Us !</h2>
      <div class="sec__cloth">
        <h3 class="sec__browse">Browse Traditional Clothing:</h3>
        <div class="itemsCloth">
          <div class="item item1">
            <img class="product__img" src="https://i.pinimg.com/564x/4d/8c/7f/4d8c7fba815fe0ab86c02702bdabc8ea.jpg">
            <div class="product__info">
              <h3 class="product__title">Kabyle dress</h3>
              <h3 class="product__price">4300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p>
          </div>
          <div class="item item2">
            <img class="product__img" src="https://images.unsplash.com/photo-1649109669957-d800d6b99fe5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YWxnZXJpYW4lMjBkcmVzc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">Blue Caftan</h3>
              <h3 class="product__price">9700DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p>
          </div>
          <div class="item item3"><img class="product__img" src="https://images.unsplash.com/photo-1649109669063-e0bd1b293fae?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGFsZ2VyaWFuJTIwZHJlc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">Cherry Mesh Caftan</h3>
              <h3 class="product__price">14,300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
          <div class="item item4"><img class="product__img" src="https://images.unsplash.com/photo-1649109670021-2e9e3adbe795?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGFsZ2VyaWFuJTIwZHJlc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">Beige Caftan</h3>
              <h3 class="product__price">14,300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
          <div class="item item5"><img class="product__img" src="https://images.unsplash.com/photo-1649109669093-90726a95c606?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGFsZ2VyaWFuJTIwZHJlc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">Light blue Goldish Caftan</h3>
              <h3 class="product__price">19,300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
          <div class="item item6"><img class="product__img" src="https://images.unsplash.com/photo-1649109669258-84a962e88a32?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGFsZ2VyaWFuJTIwZHJlc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">Royal Blue Caftan</h3>
              <h3 class="product__price">17,300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
          <div class="item item7"><img class="product__img" src="https://images.unsplash.com/photo-1649109668548-a7f59c92585d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGFsZ2VyaWFuJTIwZHJlc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">Black Brodded Dress</h3>
              <h3 class="product__price">8500DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
          <div class="item item8"><img class="product__img" src="https://i.pinimg.com/564x/a5/d4/6c/a5d46c422585a95e65a1081a3ddb43c1.jpg">
            <div class="product__info">
              <h3 class="product__title">V-neck Mermaid Red</h3>
              <h3 class="product__price">11,000DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
          <div class="item item9"><img class="product__img" src="https://i.pinimg.com/564x/63/58/a1/6358a1bfb0eb9266a858c5d47c107d75.jpg">
            <div class="product__info">
              <h3 class="product__title">Red Owl</h3>
              <h3 class="product__price">6900DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
          <div class="item item10"><img class="product__img" src="https://i.pinimg.com/736x/68/0c/fc/680cfcdc76e62a51597863ac578505ce.jpg">
            <div class="product__info">
              <h3 class="product__title">Royal Green Caftan</h3>
              <h3 class="product__price">20,300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
        </div>
      </div>
        <div class="sec__dish">
          <h3 class="sec__browse">Browse Traditional Dishes:</h3>
          <div class="itemsDish">
            <div class="item item1"><img class="product__img" src="https://images.unsplash.com/photo-1594981449006-3bb015dd305a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YWxnZXJpYW4lMjBmb29kfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">BaQlawa</h3>
              <h3 class="product__price">1000DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
            <div class="item item2"><img class="product__img" src="https://images.unsplash.com/photo-1541518763669-27fef04b14ea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y291c2NvdXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">CousCous Viande</h3>
              <h3 class="product__price">800DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
            <div class="item item3"><img class="product__img" src="https://i.pinimg.com/236x/96/37/4b/96374b4e368b422795d888d314818347.jpg">
            <div class="product__info">
              <h3 class="product__title">CousCous Poulet</h3>
              <h3 class="product__price">700DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
            <div class="item item4"><img class="product__img" src="https://i.pinimg.com/236x/92/e9/c1/92e9c1c075c6d02b544dc9e2f622e7d7.jpg">
            <div class="product__info">
              <h3 class="product__title">Ma7chi</h3>
              <h3 class="product__price">200DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
            <div class="item item5"><img class="product__img" src="https://i.pinimg.com/236x/9c/e7/c9/9ce7c9e8c455c3bf5137b47bae03bcc4.jpg">
            <div class="product__info">
              <h3 class="product__title">Kessra</h3>
              <h3 class="product__price">100DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
            <div class="item item6"><img class="product__img" src="https://i.pinimg.com/236x/45/51/ac/4551ac0e8928d52237064477f1791db0.jpg">
            <div class="product__info">
              <h3 class="product__title">BerkouKes</h3>
              <h3 class="product__price">1300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
            <div class="item item7"><img class="product__img" src="https://i.pinimg.com/236x/f3/d4/16/f3d416b2629bcafa5fa7776e66e032a5.jpg">
            <div class="product__info">
              <h3 class="product__title">CheKhchouKha</h3>
              <h3 class="product__price">1200DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
            <div class="item item8"><img class="product__img" src="https://i.pinimg.com/236x/32/c0/e5/32c0e5198e909cdd8b5356e95924fb99.jpg">
            <div class="product__info">
              <h3 class="product__title">MbarDja</h3>
              <h3 class="product__price">350DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
            <div class="item item9"><img class="product__img" src="https://i.pinimg.com/236x/66/58/c8/6658c83b6cf23e8d4a420c04a9210446.jpg">
            <div class="product__info">
              <h3 class="product__title">Aftir</h3>
              <h3 class="product__price">1600DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
            <div class="item item10"><img class="product__img" src="https://i.pinimg.com/236x/f0/14/14/f014147a343cea34e7791d61fcd15b52.jpg">
            <div class="product__info">
              <h3 class="product__title">ZfiTi</h3>
              <h3 class="product__price">2000DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
          </div>
        </div>
          <div class="sec__jewelry">
            <h3 class="sec__browse">Browse Traditional Jewelry:</h3>
            <div class="itemsJewel">
              <div class="item item1"><img class="product__img" src="https://images.unsplash.com/photo-1671642883395-0ab89c3ac890?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXJhYiUyMGpld2Vscnl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">Bloody Miss</h3>
              <h3 class="product__price">2500DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
              <div class="item item2"><img class="product__img" src="https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80">
            <div class="product__info">
              <h3 class="product__title">Ocean Blue</h3>
              <h3 class="product__price">2300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
              <div class="item item3"><img class="product__img" src="https://images.unsplash.com/photo-1535632787350-4e68ef0ac584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">RoYal Set x4</h3>
              <h3 class="product__price">4500DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
              <div class="item item4"><img class="product__img" src="https://images.unsplash.com/photo-1536232038510-337303acd6e0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEyfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">Grenadine</h3>
              <h3 class="product__price">3300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
              <div class="item item5"><img class="product__img" src="https://i.pinimg.com/736x/e4/52/a8/e452a875746843f3d8252c104c4c24f5.jpg">
            <div class="product__info">
              <h3 class="product__title">Kabyle Heady</h3>
              <h3 class="product__price">1300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
              <div class="item item6"><img class="product__img" src="https://i.pinimg.com/564x/d1/47/36/d14736044f1ab7be29b73145d2f0b64c.jpg">
            <div class="product__info">
              <h3 class="product__title">Melange</h3>
              <h3 class="product__price">8000DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
              <div class="item item7"><img class="product__img" src="https://i.pinimg.com/736x/ef/5c/14/ef5c149ee2eafb953c2152a61366b88e.jpg">
            <div class="product__info">
              <h3 class="product__title">Fleurs Precieuses</h3>
              <h3 class="product__price">9300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
              <div class="item item8"><img class="product__img" src="https://i.pinimg.com/736x/b3/6b/fd/b36bfdfe367dda2adf34b2cba89d485a.jpg">
            <div class="product__info">
              <h3 class="product__title">Toscane</h3>
              <h3 class="product__price">11,300DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
              <div class="item item9"><img class="product__img" src="https://i.pinimg.com/736x/6e/67/3c/6e673cbbf95493ad8ac226e95943de46.jpg">
            <div class="product__info">
              <h3 class="product__title">Precious Allah</h3>
              <h3 class="product__price">8900DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
              <div class="item item10"><img class="product__img" src="https://i.pinimg.com/736x/7e/15/25/7e152541df8247c8d7a6285917d09af0.jpg">
            <div class="product__info">
              <h3 class="product__title">Algeria</h3>
              <h3 class="product__price">1500DA</h3>
            </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Minus iure eligendi.</p></div>
           </div>
      
      <a  href="/shop_part/shopping" class="sec__btn--3 nav__btn--1">See More</a>
    </section>
    <section class="section--3" id="section--3">
      <h2 class="sec__title--3">Explore Our Country !</h2>
      <div class="sec__util">
        <img class="sec__icon--explore" src="pics/Filter.png" />
        <h3 class="sec__txt--1">Sorted by : Recent</h3>
      </div>

      <div class="sec__explore--1">
        <div class="sec__rect--main--red">
          <!-- upper date + location-->
          <div class="exp--1">
            <div class="exp__locat">
              <img class="sec__icon--location" src="pics/location.png" />
              <h5 class="sec__txt--location">{{ $HomePosts[0]->wilaya }}</h5>
            </div>
            <h5 class="exp__date">{{$HomePosts[0]->created_at->format('d/m/Y') }}</h5>
          </div>
          <!--PHOTOS-->
          <div class="sec__rect">
            <div class="sec__rect--1" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[0]->pictures[0]->path) }})"></div>
            <div class="rec__parent">
              <div class="sec__rect_small sec__rect--2" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[0]->pictures[1]->path) }})"></div>
              <div class="sec__rect_small sec__rect--3" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[0]->pictures[2]->path) }})"></div>
            </div>
          </div>
          <div class="sec__profiles">
            <div class="sec__profile">
              <div class="sec__profile--circle"></div>
              <h5 class="sec__profile--txt1">{{$HomePosts[0]->user_id }}</h5>
            </div>
            <div class="sec__profile--txt2">
              {{$HomePosts[0]->body }}
            </div>
          </div>
          <!-- BAR-->
          <div class="sec__bar">
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/filled_heart.png" />
              <h5 class="sec__bar__icon--txt1">12</h5>
            </div>
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/Bubblechat.png" />
              <h5 class="sec__bar__icon--txt1">60</h5>
            </div>
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/saved.png" />
              <h5 class="sec__bar__icon--txt1">32</h5>
            </div>
          </div>
        </div>
        <!-- ///////////////////////////-->

        <div class="sec__rect--main">
          <!-- upper date + location-->
          <div class="exp--1">
            <div class="exp__locat">
              <img class="sec__icon--location" src="pics/location.png" />
              <h5 class="sec__txt--location">{{ $HomePosts[1]->wilaya }}</h5>
            </div>
            <h5 class="exp__date">{{$HomePosts[1]->created_at->format('d/m/Y') }}</h5>
          </div>
          <!--PHOTOS-->
          <div class="sec__rect">
            <div class="sec__rect--1" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[1]->pictures[0]->path) }})"></div>
            <div class="rec__parent">
              <div class="sec__rect_small sec__rect--2" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[1]->pictures[1]->path) }})"></div>
              <div class="sec__rect_small sec__rect--3" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[1]->pictures[2]->path) }})"></div>
            </div>
          </div>
          <div class="sec__profiles">
            <div class="sec__profile">
              <div class="sec__profile--circle"></div>
              <h5 class="sec__profile--txt1">{{$HomePosts[1]->user_id }}</h5>
            </div>
            <div class="sec__profile--txt2">
              {{$HomePosts[1]->body }}
            </div>
          </div>
          <!-- BAR-->
          <div class="sec__bar">
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/filled_heart.png" />
              <h5 class="sec__bar__icon--txt1">12</h5>
            </div>
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/Bubblechat.png" />
              <h5 class="sec__bar__icon--txt1">60</h5>
            </div>
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/saved.png" />
              <h5 class="sec__bar__icon--txt1">32</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="sec__explore--2">
        <div class="sec__rect--main">
          <!-- upper date + location-->
          <div class="exp--1">
            <div class="exp__locat">
              <img class="sec__icon--location" src="pics/location.png" />
              <h5 class="sec__txt--location">{{ $HomePosts[2]->wilaya }}</h5>
            </div>
            <h5 class="exp__date">{{$HomePosts[2]->created_at->format('d/m/Y') }}</h5>
          </div>
          <!--PHOTOS-->
          <div class="sec__rect">
            <div class="sec__rect--1" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[2]->pictures[0]->path) }})"></div>
            <div class="rec__parent">
              <div class="sec__rect_small sec__rect--2" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[2]->pictures[1]->path) }})"></div>
              <div class="sec__rect_small sec__rect--3" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[2]->pictures[2]->path) }})"></div>
            </div>
          </div>
          <div class="sec__profiles">
            <div class="sec__profile">
              <div class="sec__profile--circle"></div>
              <h5 class="sec__profile--txt1">{{$HomePosts[2]->user_id }}</h5>
            </div>
            <div class="sec__profile--txt2">
              {{$HomePosts[2]->body }}
            </div>
          </div>
          <!-- BAR-->
          <div class="sec__bar">
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/filled_heart.png" />
              <h5 class="sec__bar__icon--txt1">12</h5>
            </div>
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/Bubblechat.png" />
              <h5 class="sec__bar__icon--txt1">60</h5>
            </div>
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/saved.png" />
              <h5 class="sec__bar__icon--txt1">32</h5>
            </div>
          </div>
        </div>
        <!-- ///////////////////////////-->

        <div class="sec__rect--main--red">
          <!-- upper date + location-->
          <div class="exp--1">
            <div class="exp__locat">
              <img class="sec__icon--location" src="pics/location.png" />
              <h5 class="sec__txt--location">{{ $HomePosts[3]->wilaya }}</h5>
            </div>
            <h5 class="exp__date">{{$HomePosts[2]->created_at->format('d/m/Y') }}</h5>
          </div>
          <!--PHOTOS-->
          <div class="sec__rect">
            <div class="sec__rect--1" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[3]->pictures[0]->path) }})"></div>
            <div class="rec__parent">
              <div class="sec__rect_small sec__rect--2" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[3]->pictures[1]->path) }})"></div>
              <div class="sec__rect_small sec__rect--3" style="background-image: url({{ Storage::url('public/posts_images/' . $HomePosts[3]->pictures[2]->path) }})"></div>
            </div>
          </div>
          <div class="sec__profiles">
            <div class="sec__profile">
              <div class="sec__profile--circle"></div>
              <h5 class="sec__profile--txt1">{{$HomePosts[3]->user_id }}</h5>
            </div>
            <div class="sec__profile--txt2">
              {{$HomePosts[3]->body }}
            </div>
          </div>
          <!-- BAR-->
          <div class="sec__bar">
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/filled_heart.png" />
              <h5 class="sec__bar__icon--txt1">12</h5>
            </div>
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/Bubblechat.png" />
              <h5 class="sec__bar__icon--txt1">60</h5>
            </div>
            <div class="sec__bar__icon">
              <img class="sec__bar__icon--1" src="pics/saved.png" />
              <h5 class="sec__bar__icon--txt1">32</h5>
            </div>
          </div>
        </div>
      </div>
      <a  href="/posts" class="sec__btn--3 nav__btn--1">See More</a>
</section>
@endsection

