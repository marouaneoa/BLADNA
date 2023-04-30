@extends('layouts.app')

@section('title')
       BLADNA | Discover Algeria !
@endsection

@section ('main')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New item</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/save-item" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="modal-body">
            
           

            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">name:</label>
                <input type="text" name="name" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">description:</label>
                <input type="text" name="description" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">price:</label>
                <input type="number" name="price" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">availability:</label>
                <select name="is_available" class="form-control">
                                    <option value="1">yes</option>
                                    <option value="0">no</option>
                    </select>
            </div>

            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">vendor:</label>
                <select name="vendor_id" class="form-control">
                    @foreach($vendor as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                    </select>
            </div>
            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">region:</label>
                <select name="region_id" class="form-control">
                @foreach($regions as $region)
                        <option value="{{$region->id}}">{{$region->name}}</option>
                    @endforeach
                    </select>
            </div>
            <div class="mb-3"> 
                <label for="recipient-name" class="col-form-label">category:</label>
                <select name="category_id" class="form-control">
                @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>
            </div>
            <div class="form-group">
              <label for="images">Images:</label>
              <input type="file" class="form-control" id="images" name="images[]" multiple>
            </div>
                

            
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


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
          <a href="auth/register" class="sec__btn nav__btn--2">
            Sign Up
          </a>
          <div class="sec__btn nav__btn--1">Log In</div>
        </div>
        <div class="sec__map" id="map"> </div>
      </section>
      <img class="sec__icon--chevron" src="{{asset('/pics/chevron.png')}}" id="chevron" />
    </header>

    
    <section class="section--2" id="section--2">
      <h2 class="sec__title--3">Shop With Us !</h2>
      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >ADD  Product</button>
      <div class="sec__cloth">
        <h3 class="sec__browse">Browse Traditional Clothing:</h3>
        <div class="itemsCloth">

        @foreach($items as $item)
        @if($item->category == 'clothes') 
          <div class="item item1">
            <img class="product__img" src="https://i.pinimg.com/564x/4d/8c/7f/4d8c7fba815fe0ab86c02702bdabc8ea.jpg">
            <div class="product__info">
              <h3 class="product__title">{{$item->name}}</h3>
              <h3 class="product__price">{{$item->price}}  DA</h3>
            </div>
            
          <p class="product__desc">{{$item->description}}</p>
          </div>
          @endif
        @endforeach
          
        <div class="sec__dish">
          <h3 class="sec__browse">Browse Traditional Dishes:</h3>
          <div class="itemsDish">

          @foreach($items as $item)
            @if($item->category == 'food') 
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
            @endif

          @endforeach
          
        </div>
          <div class="sec__jewelry">
            <h3 class="sec__browse">Browse Traditional Jewelry:</h3>
            <div class="itemsJewel">
            @foreach($items as $item)
             @if($item->category == "jewelry") 
              <div class="item item1"><img class="product__img" src="https://images.unsplash.com/photo-1671642883395-0ab89c3ac890?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXJhYiUyMGpld2Vscnl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
            <div class="product__info">
              <h3 class="product__title">{{$item->name}}</h3>
              <h3 class="product__price">{{$item->price}}  DA</h3>
            </div>
            <p class="product__desc">{{$item->description}}</p></div>
            @endif
            @endforeach
      
      <div class="sec__btn--3 nav__btn--1">See More</div>
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
              <h5 class="sec__txt--location">Bejaia</h5>
            </div>
            <h5 class="exp__date">22/02/2023</h5>
          </div>
          <!--PHOTOS-->
          <div class="sec__rect">
            <div class="sec__rect--1"></div>
            <div class="rec__parent">
              <div class="sec__rect_small sec__rect--2"></div>
              <div class="sec__rect_small sec__rect--3"></div>
            </div>
          </div>
          <div class="sec__profiles">
            <div class="sec__profile">
              <div class="sec__profile--circle"></div>
              <h5 class="sec__profile--txt1">@Younes_Boudaoud</h5>
            </div>
            <div class="sec__profile--txt2">
              Belle journee a la wilaya de bejaia ! 38C vraiment bien pour se<br />
              ballader dans les rues de cette ville !
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
              <h5 class="sec__txt--location">Bejaia</h5>
            </div>
            <h5 class="exp__date">22/02/2023</h5>
          </div>
          <!--PHOTOS-->
          <div class="sec__rect">
            <div class="sec__rect--1"></div>
            <div class="rec__parent">
              <div class="sec__rect_small sec__rect--2"></div>
              <div class="sec__rect_small sec__rect--3"></div>
            </div>
          </div>
          <div class="sec__profiles">
            <div class="sec__profile">
              <div class="sec__profile--circle"></div>
              <h5 class="sec__profile--txt1">@Younes_Boudaoud</h5>
            </div>
            <div class="sec__profile--txt2">
              Belle journee a la wilaya de bejaia ! 38C vraiment bien pour se<br />
              ballader dans les rues de cette ville !
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
              <h5 class="sec__txt--location">Bejaia</h5>
            </div>
            <h5 class="exp__date">22/02/2023</h5>
          </div>
          <!--PHOTOS-->
          <div class="sec__rect">
            <div class="sec__rect--1"></div>
            <div class="rec__parent">
              <div class="sec__rect_small sec__rect--2"></div>
              <div class="sec__rect_small sec__rect--3"></div>
            </div>
          </div>
          <div class="sec__profiles">
            <div class="sec__profile">
              <div class="sec__profile--circle"></div>
              <h5 class="sec__profile--txt1">@Younes_Boudaoud</h5>
            </div>
            <div class="sec__profile--txt2">
              Belle journee a la wilaya de bejaia ! 38C vraiment bien pour se<br />
              ballader dans les rues de cette ville !
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
              <h5 class="sec__txt--location">Bejaia</h5>
            </div>
            <h5 class="exp__date">22/02/2023</h5>
          </div>
          <!--PHOTOS-->
          <div class="sec__rect">
            <div class="sec__rect--1"></div>
            <div class="rec__parent">
              <div class="sec__rect_small sec__rect--2"></div>
              <div class="sec__rect_small sec__rect--3"></div>
            </div>
          </div>
          <div class="sec__profiles">
            <div class="sec__profile">
              <div class="sec__profile--circle"></div>
              <h5 class="sec__profile--txt1">@Younes_Boudaoud</h5>
            </div>
            <div class="sec__profile--txt2">
              Belle journee a la wilaya de bejaia ! 38C vraiment bien pour se<br />
              ballader dans les rues de cette ville !
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
      <div class="sec__btn--3 nav__btn--1">See More</div>
</section>
@endsection

