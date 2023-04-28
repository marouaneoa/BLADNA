@extends('layouts.app')
<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Post') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
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

                            <div class="form-group">
                                <label for="body">Body</label>
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

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    </script>
@endsection
