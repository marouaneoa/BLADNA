<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bladna | Add Post</title>
    <link rel="stylesheet" href="{{asset('assets/css/create-posts.css')}}">
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
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
      @csrf
      
      <div class="right">
        <div class="right__head">
          <img class="head__logo" src="/pics/bladna.png" />
          <h1>CREATE A POST</h1>
        </div>
        <div class="right__all">
          <div class="input__form">
            <div class="input__box input--1">
                <label for="title">Title</label>
                <input type="text" name="title" id="title"
                       class="form-control @error('title') is-invalid @enderror"
                       value="{{ old('title') }}" required>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="input__box input--4">
                <label for="body" class="body">Body</label>
                <textarea name="body" id="body"
                          class="form-control @error('body') is-invalid @enderror"
                          required>{{ old('body') }}</textarea>
                @error('body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div id="pictures-group">
              <div class="form-group picture-group">
                  <label for="picture">Picture</label>
                  <input type="file" name="picture[]" class="form-control-file" multiple>
              </div>
          </div>

          <div class="form-group">
              <button type="button" id="add-picture" class="btn btn-primary">Add Picture</button>
          </div>
          </div>
          <div class="preview__form">
            <div class="preview__txt">
              <h2>Preview :</h4>
            </div>
            <img class="product__img" src="">
            <div class="product__info">
              <h3 class="product__name">Post Title</h5>
           </div>
            <p class="product__desc">Lorem ipsum dolor sit amet consectetur. Id ac consectetur enim in morbi neque.</p>
            
         </div>
         
       </div>
       <input type="submit" value="Publish" name="additem" class="submit__btn">
    </form>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          const picturesGroup = document.querySelector('#pictures-group');
          const addPictureButton = document.querySelector('#add-picture');
          let index = 1;

          addPictureButton.addEventListener('click', function (event) {
              event.preventDefault();
              if (index < 5) {
                  const pictureGroup = document.createElement('div');
                  pictureGroup.classList.add('form-group', 'picture-group');
                  const pictureLabel = document.createElement('label');
                  pictureLabel.setAttribute('for', `picture-${index}`);
                  pictureLabel.textContent = `Picture ${index + 1}`;
                  const pictureInput = document.createElement('input');
                  pictureInput.setAttribute('type', 'file');
                  pictureInput.setAttribute('name', `picture[]`);
                  pictureInput.setAttribute('class', 'form-control-file');
                  pictureInput.setAttribute('id', `picture-${index}`);
                  pictureGroup.appendChild(pictureLabel);
                  pictureGroup.appendChild(pictureInput);
                  picturesGroup.appendChild(pictureGroup);
                  index++;
              } else {
                  addPictureButton.setAttribute('disabled', 'disabled');
              }
          });
      });
      const titleInput = document.querySelector('#title');
      const bodyInput = document.querySelector('#body');
      const productName = document.querySelector('.product__name');
      const productDesc = document.querySelector('.product__desc');

     titleInput.addEventListener('input', function() {
    productName.textContent = titleInput.value;
    });

  bodyInput.addEventListener('input', function() {
    productDesc.textContent = bodyInput.value;
  });
  const pictureInput = document.querySelector('input[name="picture[]"]');
    const previewImg = document.querySelector('.product__img');
    
    pictureInput.addEventListener('change', function(event) {
        const files = event.target.files;
        const firstFile = files[0];
        const reader = new FileReader();
        
        reader.addEventListener('load', function() {
            previewImg.src = reader.result;
        });
        
        reader.readAsDataURL(firstFile);
    });
  </script>
  </body>
</html>