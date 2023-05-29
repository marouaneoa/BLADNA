<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bladna | Add item</title>
    <link rel="stylesheet" href="/assets/css/add-item.css">
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
    <form method="POST" action="{{ route('items.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="left">
        <div class="cards">
          <div class="card card--1">
            <div class="card__content--1">
              <img class="card__content__img" src="/pics/add-item/add.png" />

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
          <img class="head__logo" src="/pics/add-item/bladna.png" />
          <h1>ADD ITEM TO THE SHOP</h1>
        </div>
        <div class="right__all">
          <div class="input__form">
            <div class="input__box input--1">
              <label for="pname">Product Name :</label><br />
              <input
                type="text"
                placeholder="product name"
                id="pname"
                name="name"
              />
            </div>
            <div class="input__box input--2">
              <label for="pprice">Product Price :</label><br />
              <input
                type="number"
                placeholder="product price"
                id="pprice"
                name="price"
              />
            </div>
            <div class="input__box input--3">
                <label for="pcategory">Product Category:</label><br />
                <select id="pcategory" name="category_id">
                  <option value="" selected disabled>Select a category</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="input__box input--4">
              <label for="pname">Product Description :</label><br />
              <textarea
                maxlength="400"
                rows="4"
                cols="40"
                class="text__field"
                placeholder="Lorem ipsum dolor sit amet consectetur. Id ac consectetur enim in morbi neque."
                name="description"
              ></textarea>
            </div>
            <div class="input__box input--5">
                <label for="pregion">Region: </label><br />
                <select id="pregion" name="region_id">
                    <option value="" selected disabled>Select a category</option>
                    @foreach($regions as $region)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
            </div>
          </div>
          <div class="preview__form">
            <div class="preview__txt">
              <h4>Preview :</h4>
              <h5>Edit Cover Image</h5>
            </div>
            <div class="product__img">
              <img class="product__heart" src="/pics/add-item/wish.png">
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