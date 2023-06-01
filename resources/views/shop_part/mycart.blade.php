@extends('layouts.app')

@section('title')
       BLADNA | My Cart
@endsection


<link rel="stylesheet" href="/assets/css/shopping.css" />
<script defer src="/assets/js/shopping.js"></script>
<link href="https://fonts.googleapis.com/css?family=Fugaz One" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet" />
<link href="https://unpkg.com/css.gg@2.0.0/icons/css/carousel.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<style>
 .product__row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.product__vitrine {
  width: calc(50% - 10px); /* Adjust the width and margin as needed */
  margin-bottom: 20px; /* Adjust the margin as needed */
}
  .product__desc {
    padding: 10px;
    text-align: center;
  }

  .product__img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
  }

  .product__title--1 {
    font-size: 16px;
  }
</style>

@section('main')

<br><br><br>
<header id="header">
  <div class="header__txt">
    <h1 class="header__txt--1">My Cart:</h1>
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

  @if (count($cartItems) > 0)
  <div class="product__row">
    @foreach($cartItems as $item)
    <div class="product__vitrine">
      <div class="product__desc">
        <a href="{{ route('product', ['id' => $item->product]) }}">
          <img class="product__img" src="{{ asset('storage/item_images/' . $item->image_path) }}" alt="{{ $item->name }}">
        </a>
        <h1 class="product__title--1">{{ $item->name }}</h1>
        <h3 class="product__price--1">{{$item->price}} DZD</h3>
    
        <a class="nav__btn--2" 
          onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this item?')) window.location.href = '{{ route('delete_itemcart', ['id' => $item->cart_id]) }}';">
          Delete
        </a>
      </div>
    </div>
    @endforeach
  </div>
  @else
  <p>no product added to your cart</p>
  @endif

  <script src="/assets/splide-4.1.3/dist/js/splide.min.js"></script>
  <link rel="stylesheet" href="/assets/splide-4.1.3/dist/css/splide.min.css" />
  <link rel="stylesheet" href="/assets/css/product_details.css" />
  <script defer src="/assets/js/product_details.js"></script>
@endsection
