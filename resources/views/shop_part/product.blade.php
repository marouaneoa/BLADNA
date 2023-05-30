@extends('layouts.app')
    <script src="/assets/splide-4.1.3/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="/assets/splide-4.1.3/dist/css/splide.min.css" />
    <link rel="stylesheet" href="/assets/css/product_details.css" />
    <script defer src="/assets/js/product_details.js"></script>
@section('main')
    <header class="product__vitrine" id="header">
      <div class="left__photo">
        <div class="product__photos">
          <div class="secondary__images">
            @foreach ($product->pictures as $in => $picture)
              @if ($in > 0)
                <img src="{{ Storage::url('public/products_images/' . $picture->path) }}" data-pos="{{ $in-1 }}">
              @endif
            @endforeach
          </div>
          <div class="main__photo">
            <img src="{{ Storage::url('public/products_images/' . $product->pictures->first()->path ) }}" data-pos="{{ $product->pictures->count() }}">
          </div>
        </div>        
      </div>

      <div class="product__desc">
        <h1 class="product__title--1">{{$product->name}}</h1>
        <h3 class="product__price--1">{{$product->price}} DZD</h3>
        <div class="desc">
          <h5>Description :</h5>
          <p>
            {{$product->description  }}
          </p>
        </div>
        <div class="product__btns">
          <a class="product__btn">ADD TO CART</a>
          <img class="wishlist" src="/pics/heart.png" />
        </div>
      </div>
    </header>
    <main>
      <div class="overview__reviews">
        <h1>Reviews</h1>
        <!-- <div class="reveiw__stars">
          <div class="star star--1"></div>
          <div class="star star--2"></div>
          <div class="star star--3"></div>
          <div class="star star--4"></div>
          <div class="star star--5"></div>
        </div> -->

        <div class="stars">
          <svg viewBox="0 0 576 512" width="100" title="star">
            <path
              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"
            /></svg
          ><svg viewBox="0 0 576 512" width="100" title="star">
            <path
              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"
            /></svg
          ><svg viewBox="0 0 576 512" width="100" title="star">
            <path
              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"
            /></svg
          ><svg viewBox="0 0 576 512" width="100" title="star">
            <path
              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"
            /></svg
          ><svg viewBox="0 0 576 512" width="100" title="star">
            <path
              d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"
            />
          </svg>

          <div class="cover" style="width: 85%"></div>
        </div>

        <h3 class="ratings">6,554 Total Ratings</h3>

        <div class="review__rectangles">
          <div class="rev rev--1">
            <div class="label label--1">5 &star;</div>

            <div class="rect rect--1">
              <div class="rectcover rectcover--1"></div>
            </div>
          </div>

          <div class="rev rev--2">
            <div class="label label--2">4 &star;</div>
            <div class="rect rect--2">
              <div class="rectcover rectcover--2"></div>
            </div>
          </div>

          <div class="rev rev--3">
            <div class="label label--3">3 &star;</div>
            <div class="rect rect--3">
              <div class="rectcover rectcover--3"></div>
            </div>
          </div>

          <div class="rev rev--4">
            <div class="label label--4">2 &star;</div>
            <div class="rect rect--4">
              <div class="rectcover rectcover--4"></div>
            </div>
          </div>

          <div class="rev rev--5">
            <div class="label label--5">1 &star;</div>
            <div class="rect rect--5">
              <div class="rectcover rectcover--5"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="review__slider">
        <section class="splide" aria-labelledby="carousel-heading">
          <h2 id="carousel-heading">Top Reviews:</h2>
          <h6>Swipe to see more !</h6>
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="content">
                  <div class="s__profile">
                    <img class="p__img" src="/pics/p.png" />
                    <h5>@Bahdja_mesers</h5>
                  </div>
                  <div class="s__txt">
                    <h2>Produit excellent mais long a arriver :</h2>
                    <p>
                      Sed interdum ut scelerisque lectus dui diam semper massa
                      scelerisque. Elit amet quis at rhoncus aliquet dui pretium
                      ut. In ac ut enim sed ultrices.
                    </p>
                  </div>
                  <div class="stars--2">
                    <h2>&star; &star; &star; &star; &star;</h2>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="content">
                  <div class="s__profile">
                    <img class="p__img" src="/pics/p.png" />
                    <h5>@Bahdja_mesers</h5>
                  </div>
                  <div class="s__txt">
                    <h2>Produit excellent mais long a arriver :</h2>
                    <p>
                      Sed interdum ut scelerisque lectus dui diam semper massa
                      scelerisque. Elit amet quis at rhoncus aliquet dui pretium
                      ut. In ac ut enim sed ultrices.
                    </p>
                  </div>
                  <div class="stars--2">
                    <h2>&star; &star; &star; &star; &star;</h2>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="content">
                  <div class="s__profile">
                    <img class="p__img" src="/pics/p.png" />
                    <h5>@Bahdja_mesers</h5>
                  </div>
                  <div class="s__txt">
                    <h2>Produit excellent mais long a arriver :</h2>
                    <p>
                      Sed interdum ut scelerisque lectus dui diam semper massa
                      scelerisque. Elit amet quis at rhoncus aliquet dui pretium
                      ut. In ac ut enim sed ultrices.
                    </p>
                  </div>
                  <div class="stars--2">
                    <h2>&star; &star; &star; &star; &star;</h2>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="content">
                  <div class="s__profile">
                    <img class="p__img" src="/pics/p.png" />
                    <h5>@Bahdja_mesers</h5>
                  </div>
                  <div class="s__txt">
                    <h2>Produit excellent mais long a arriver :</h2>
                    <p>
                      Sed interdum ut scelerisque lectus dui diam semper massa
                      scelerisque. Elit amet quis at rhoncus aliquet dui pretium
                      ut. In ac ut enim sed ultrices.
                    </p>
                  </div>
                  <div class="stars--2">
                    <h2>&star; &star; &star; &star; &star;</h2>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="content">
                  <div class="s__profile">
                    <img class="p__img" src="/pics/p.png" />
                    <h5>@Bahdja_mesers</h5>
                  </div>
                  <div class="s__txt">
                    <h2>Produit excellent mais long a arriver :</h2>
                    <p>
                      Sed interdum ut scelerisque lectus dui diam semper massa
                      scelerisque. Elit amet quis at rhoncus aliquet dui pretium
                      ut. In ac ut enim sed ultrices.
                    </p>
                  </div>
                  <div class="stars--2">
                    <h2>&star; &star; &star; &star; &star;</h2>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="content">
                  <div class="s__profile">
                    <img class="p__img" src="/pics/p.png" />
                    <h5>@Bahdja_mesers</h5>
                  </div>
                  <div class="s__txt">
                    <h2>Produit excellent mais long a arriver :</h2>
                    <p>
                      Sed interdum ut scelerisque lectus dui diam semper massa
                      scelerisque. Elit amet quis at rhoncus aliquet dui pretium
                      ut. In ac ut enim sed ultrices.
                    </p>
                  </div>
                  <div class="stars--2">
                    <h2>&star; &star; &star; &star; &star;</h2>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <div class="slide__btn">See All</div>
      </div>
    </main>
    <section class="sec__discover">
      <h1 class="sec__head">Discover :</h1>
      <div class="sec__content">
        @foreach ($lastestItems as $index => $item)
        <div class="product product{{$index+1}}">
          <img
            class="product__img"
            src="{{ //Storage::url('public/products_images/' . $item->pictures->first()->path ) }}"
          />
          <div class="product__info">
            <h3 class="product__title">{{$item->name}}</h3>
            <h3 class="product__price">{{$item->price}}</h3>
          </div>
        </div>
        @endforeach
      </div>
    </section>
@endsection

