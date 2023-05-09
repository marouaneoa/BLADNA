<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bladna | Add item</title>
    <link rel="stylesheet" href="{{ asset(' assets/css/style.css')}}">
    <link
    href="https://fonts.googleapis.com/css?family=Fugaz One"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css?family=Jost"
    rel="stylesheet"
  />
  </head>
  <body>
    <form>
      <div class="left">
        <div class="cards">
          <div class="card card--1">
            <div class="card__content--1">
              <img class="card__content__img" src="{{ asset(' assets/pics/add.png')}}" />

              <label for="image-input" class="import">Import</label>
            <br>
            <input
              type="file"
              name="image"
              accept="image/png, image/jpeg"
              id="image-input"
              multiple
            />
            </div>
          </div>
          <div class="card card--2"></div>
          <div class="card card--3"></div>
          <div class="card card--4">
            <h3 class="card__content--2">+ 2 Others</h3>
          </div>
        </div>
      </div>

      <div class="right">
        <div class="right__head">
          <img class="head__logo" src="{{ asset(' assets/pics/bladna.png')}}"  />
          <h1>ADD ITEM TO THE SHOP</h1>
        </div>
        <div class="right__all">
          <div class="input__form">
            <div class="input__box input--1">
              <label for="name">Product Name :</label><br />
              <input
                type="text"
                placeholder="product name"
                id="name"
                name="name"
              />
            </div>
            <div class="input__box input--2">
              <label for="price">Product Price :</label><br />
              <input
                type="number"
                placeholder="product price"
                id="price"
                name="price"
              />
            </div>
            <div class="input__box input--3">
              <label for="category_id">Product Category :</label><br />
              <select
                id="category_id"
                name="category_id">
                @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                 </select>
            </div>
            </div>
            <div class="input__box input--4">
              <label for="description">Product Description :</label><br />
              <textarea
                name="description"
                maxlength="400"
                rows="4"
                cols="40"
                class="text__field"></textarea>
            </div>
          </div>
          <div class="preview__form">
            <div class="preview__txt">
              <h4>Preview :</h4>
              <h5>Edit Cover Image</h5>
            </div>
            <div class="product__img">
              <img class="product__heart" src="{{asset(' assets/pics/wish.png')}}">
            </div>
            <div class="product__info">
              <h5 class="product__name">Product Name</h5>
              <h5 class="product__price">0.00 DA</h5>
           </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur. Id ac consectetur enim in morbi neque.</p>
            
         </div>
         
       </div>
       <input type="submit" value="Publish" name="additem" class="submit__btn">
    </form>
  </body>
</html>
