<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bladna | Add item</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fugaz One" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet" />
    <style>
  .card__content__img {
    max-width: 100%;
    max-height: 100%;
  }
</style>
  </head>
  <body>
    <form action="{{ route('add_product') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="left">
        <div class="cards">
          <div class="card card--1">
            <div class="card__content--1">
            <label for="images" class="import">Import</label>
              <br>
              <input
                type="file"
                name="images[]"
                accept="image/png, image/jpeg"
                id="images"
                multiple
                required
              />
            </div>
          </div>
          <br><br>
        </div>
      </div>
      <div class="right">
        <div class="right__head">
          <img class="head__logo" src="{{ asset('pics/add-item/bladna.png')}}" />
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
              <select id="category_id" name="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="input__box input--3">
              <label for="region_id">Product Region :</label><br />
              <select id="region_id" name="region_id">
                @foreach($regions as $region)
                <option value="{{$region->id}}">{{$region->name}}</option>
                @endforeach
              </select>
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
       
      </div>
      <div class="product__img">
      <img class="product__img" src="{{ asset('pics/backk.png') }}">
      <img class="product__heart" src="{{ asset('pics/add-item/wish.png') }}">
     
      </div>
      
      <div class="product__info">
        <h5 class="product__name">Product Name</h5>
        <h5 class="product__price">0.00 DA</h5>
      </div>
    
    </div>
       <input type="submit" value="Publish" name="additem" class="submit__btn">
    </form>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
      const productNameInput = document.querySelector('#name');
      const productPriceInput = document.querySelector('#price');
      const productDescriptionInput = document.querySelector('#description');
      const productName = document.querySelector('.product__name');
      const productPrice = document.querySelector('.product__price');
      const productDescription = document.querySelector('.product__desc');

      productNameInput.addEventListener('input', function () {
        productName.textContent = productNameInput.value;
      });

      productPriceInput.addEventListener('input', function () {
        productPrice.textContent = `${productPriceInput.value} DA`;
      });

      productDescriptionInput.addEventListener('input', function () {
        productDescription.textContent = productDescriptionInput.value;
      });
    });
  </script>
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const imagesInput = document.querySelector('#images');
    const previewImage = document.querySelector('.product__img img');

    imagesInput.addEventListener('change', function (event) {
      const file = event.target.files[0];
      const reader = new FileReader();

      reader.onload = function (e) {
        previewImage.src = e.target.result;
      };

      if (file) {
        reader.readAsDataURL(file);
      }
    });
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const imagesInput = document.querySelector('#images');
    const cardsContainer = document.querySelector('.cards');

    imagesInput.addEventListener('change', function (event) {
      const files = event.target.files;

      for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function (e) {
          const card = document.createElement('div');
          card.classList.add('card', `card--${i + 2}`);
          card.style.marginBottom = '10px'; // Adjust the margin as needed

          const cardContent = document.createElement('div');
          cardContent.classList.add('card__content--1');

          const image = document.createElement('img');
          image.classList.add('card__content__img');
          image.src = e.target.result;

          cardContent.appendChild(image);
          card.appendChild(cardContent);
          cardsContainer.appendChild(card);
        };

        if (file) {
          reader.readAsDataURL(file);
        }
      }
    });
  });
</script>

  </body>
</html>
