@extends('layouts.app')

<link rel="stylesheet" href="/assets/css/shopping.css" />
<script defer src="/assets/js/shopping.js"></script>
<link href="https://fonts.googleapis.com/css?family=Fugaz One" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet" />
<link href="https://unpkg.com/css.gg@2.0.0/icons/css/carousel.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<head>

@section('title')
        Bladna | Shop Traditionallty !
@endsection

<style>
    .alert {
        position: relative;
        padding: 1rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }
    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }
    .close {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        font-size: 1.25rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        opacity: 0.5;
    }
    .close:hover {
        color: #000;
        opacity: 0.75;
    }
</style>

@section('main')

@if(session('success'))
    <div id="success-message" class="alert alert-success">
        <span>{{ session('success') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

    
<br><br>
    <header id="header">
      <div class="header__txt">
        <h1 class="header__txt--1">Shop Traditionally !</h1>

        @if(Auth::user()->user_type === 'vendor')
            <h1><a href="{{ route('new_product') }}" class="header__txt--2">Add New Product!</a></h1>
        @endif
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

      @if( count($categories )>0)
        @foreach($categories as $category)

      <div class="sec__cloth">
        <h3>Browse Traditional {{$category->name}} :</h3>
        <div class="sec__content">
        @if( count($items )>0)
        @foreach($items as $item)
                @if($item->category_id == $category->id) 
                
          <div class="item item1">
          @foreach($p_img as $image)
          @if($image->item_id == $item->id) 
          <a href="{{ route('product', ['id' => $item->id]) }}">
              <img class="product__img" src="{{ asset('storage/item_images/' . $image->image_path) }}" alt="{{ $item->name }}">
          </a>
              @break
          @endif
                  @endforeach
                    <div class="product__info">
                      <h3 class="product__title">{{$item->name}}</h3>
                      <h3 class="product__price">{{$item->price}}DA</h3>
                    </div>
                    
                    
                  </div>
         
                @endif
                @endforeach
                @else
                  <p>No items available.</p>
                @endif
          </div>
          </div>
          <div class="main__buttons">
            <a href="{{ route('more', ['category_id' => $category->id]) }}" class="main_btn--1">See More</a>
          </div>

      @endforeach
                @else
                  <p>No Category available.</p>
                @endif
    
    </header>

  <script src="/assets/splide-4.1.3/dist/js/splide.min.js"></script>
  <link rel="stylesheet" href="/assets/splide-4.1.3/dist/css/splide.min.css" />
  <link rel="stylesheet" href="/assets/css/product_details.css" />
  <script defer src="/assets/js/product_details.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.alert').fadeIn().delay(5000).fadeOut('slow');
    });
</script>
@endsection
