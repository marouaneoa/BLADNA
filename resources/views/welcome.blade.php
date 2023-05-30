@extends('layouts.app')

@section('title')
       BLADNA | Discover Algeria !
@endsection

@section ('main')
      <section class="section--1">
        <div class="sec__testimonials">

        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
              <a href="{{asset('register')}} " class="sec__btn nav__btn--2">
            Sign Up
          </a>
          <a href="{{asset('login')}} " class="sec__btn nav__btn--1">
            Log In
          </a>

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
         
        @foreach($items as $item)
        @if($item->category == 'clothes') 
        @if( count($items )>0)
          <div class="item item1">
          @foreach($p_img as $image)
              @if($image->item_id == $item->id ) 
              <img class="product__img" src="{{ Storage::url('public/item_images/' . $image->image_path) }}" alt="{{ $item->name }}">
                  @break
              @endif
          @endforeach
            <div class="product__info">
              <h3 class="product__title">{{$item->name}}</h3>
              <h3 class="product__price">{{$item->price}}  DA</h3>
            </div>
            
          <p class="product__desc">{{$item->description}}</p>
          </div>
          @else
                  <p>No items available.</p>
              @endif  
          @endif
        @endforeach
          
        <div class="sec__dish">
          <h3 class="sec__browse">Browse Traditional Dishes:</h3>
          <div class="itemsDish">

          @foreach($items as $item)
            @if($item->category == 'food') 
            @if( count($items )>0)
            <div class="item item1">
           
            @foreach($p_img as $image)
              @if($image->item_id == $item->id ) 
              <img class="product__img" src="{{ Storage::url('public/item_images/' . $image->image_path) }}" alt="{{ $item->name }}">
                  @break
              @endif
          @endforeach
                <div class="product__info">
                <h3 class="product__title">{{$item->name}}</h3>
                <h3 class="product__price">{{$item->price}}  DA</h3>
              </div>
              <p class="product__desc">{{$item->description}}</p>
            </div>
            @else
                  <p>No items available.</p>
              @endif  
            @endif

          @endforeach
          
        </div>
          <div class="sec__jewelry">
            <h3 class="sec__browse">Browse Traditional Jewelry:</h3>
            <div class="itemsJewel">
                @foreach($items as $item)
                @if($item->category == "jewelry") 
                @if( count($items )>0)
                  <div class="item item1">
                  @foreach($p_img as $image)
                      @if($image->item_id == $item->id ) 
                      <img class="product__img" src="{{ Storage::url('public/item_images/' . $image->image_path) }}" alt="{{ $item->name }}">
                          @break
                      @endif
                  @endforeach
                    <div class="product__info">
                      <h3 class="product__title">{{$item->name}}</h3>
                      <h3 class="product__price">{{$item->price}}  DA</h3>
                    </div>
                    <p class="product__desc">{{$item->description}}</p>
                  </div>
                  @else
                      <p>No items available.</p>
                  @endif  
                @endif
                @endforeach
              </div>
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
    @foreach($posts as $index => $post)
    
        @if($index % 2 == 0)
            <div class="sec__rect--main--red">
        @else
            <div class="sec__rect--main">
        @endif

            <!-- upper date + location-->
            <div class="exp--1">
                <div class="exp__locat">
                    <img class="sec__icon--location" src="pics/location.png" />
                    <a class="sec__txt--location" href="/posts/{{ $post->id }}">{{ $post->thewilaya->name }}</a>
                </div>
                <h5 class="exp__date"> {{ $post->updated_at->diffForHumans() }}</h5>
            </div>
            <!--PHOTOS-->
            <div class="sec__rect">
                @if ($post->pictures->count() >= 3)
                <div class="sec__rect--1" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[0]->path) }})"></div>
                <div class="rec__parent">
                    <div class="sec__rect_small sec__rect--2" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[1]->path) }})"></div>
                    <div class="sec__rect_small sec__rect--3" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[2]->path) }})"></div>
                </div>
                
                @elseif ($post->pictures->count() == 2)
                <div class="rec__parenthalf">
                    <div class="sec__rect_half half--1" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[0]->path) }})"></div>
                    <div class="sec__rect_half half--2" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[1]->path) }})"></div>
                </div>
                @elseif ($post->pictures->count() == 1)
                <div class="sec__rect--big" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[0]->path) }})"></div>
                @endif

            </div>
            <div class="sec__profiles">
                <div class="sec__profile">
                    <div class="sec__profile--circle" style="background-image: url({{ Storage::url('public/posts_images/' . $post->user->pic_path) }})"></div>
                    <h5 class="sec__profile--txt1">{{ $post->user->name }}</h5>
                </div>
                <div class="sec__profile--txt2">
                    {{ $post->body }}
                </div>
            </div>
            <!-- BAR-->
            <div class="sec__bar">
                <div class="sec__bar__icon">
                    <img class="sec__bar__icon--1" src="pics/filled_heart.png" />
                    <h5 class="sec__bar__icon--txt1">{{$post->likesCount()}}</h5>
                </div>
                <div class="sec__bar__icon">
                    <img class="sec__bar__icon--1" src="pics/Bubblechat.png" />
                    <h5 class="sec__bar__icon--txt1">60</h5>
                </div>
                
            </div>
    </div>
    
    @endforeach
    </div>

      
      <a  href="/posts" class="sec__btn--3 nav__btn--1">See More</a>
</section>
@endsection

