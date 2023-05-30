@extends('layouts.app')

<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="/assets/css/show.css">


@section('main')


 <!-- Swiper -->
 <div class="posts__all">
    <div class="swiper mySwiper">
       <div class="swiper-wrapper">
       @if($post->pictures->count() > 0)
       @foreach($post->pictures as $picture)
         <div class="swiper-slide"><img src="{{ Storage::url('public/posts_images/' . $picture->path) }}" alt="post image" class="img-fluid rounded"></div>
       @endforeach
       @endif
       </div>
       <div class="swiper-button-next"></div>
       <div class="swiper-button-prev"></div>
       <div class="swiper-pagination"></div>
     </div>
    
     <div class="sidebar">
        <h2 class="post__title">{{ $post->thewilaya->name }}</h2>
        <p class="post__body">{{ $post->body }}</p>
     <div class="sec__bar">
                <div class="sec__bar__icon">
                @if($post->isLikedByUser(auth()->id()))
                         <div class="con-like">
                             <input id="like-button" title="like" type="checkbox" class="like" checked>
                                 <div class="checkmark">
                                    <svg viewBox="0 0 24 24" class="outline" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z"></path>
                                    </svg>
                                    <svg viewBox="0 0 24 24" class="filled" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z"></path>
                                    </svg>
                                     <svg class="celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                          <polygon points="10,10 20,20" class="poly"></polygon>
                                          <polygon points="10,50 20,50" class="poly"></polygon>
                                          <polygon points="20,80 30,70" class="poly"></polygon>
                                          <polygon points="90,10 80,20" class="poly"></polygon>
                                          <polygon points="90,50 80,50" class="poly"></polygon>
                                          <polygon points="80,80 70,70" class="poly"></polygon>
                                    </svg>
                                </div>
                            </div>
                            @else
                            <div class="con-like">
                             <input id="like-button" title="like" type="checkbox" class="like" >
                                 <div class="checkmark">
                                    <svg viewBox="0 0 24 24" class="outline" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z"></path>
                                    </svg>
                                    <svg viewBox="0 0 24 24" class="filled" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z"></path>
                                    </svg>
                                     <svg class="celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                          <polygon points="10,10 20,20" class="poly"></polygon>
                                          <polygon points="10,50 20,50" class="poly"></polygon>
                                          <polygon points="20,80 30,70" class="poly"></polygon>
                                          <polygon points="90,10 80,20" class="poly"></polygon>
                                          <polygon points="90,50 80,50" class="poly"></polygon>
                                          <polygon points="80,80 70,70" class="poly"></polygon>
                                    </svg>
                                </div>
                            </div>
                            @endif
                             <h5 class="sec__bar__icon--txt1" id="like-count">{{ $post->likesCount() }}</h5>
                 </div>
                <div class="sec__bar__icon">
                    <img class="sec__bar__icon--1" src="/pics/Bubblechat.png" />
                    <h5 class="sec__bar__icon--txt1">60</h5>
                </div>
            </div>
     </div>
     </div>

  
  

 
<!--
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-black">
                        
                    </div>

                    <div class="card-body">
                        <p>{{ $post->body }}</p>

                        @if($post->pictures->count() > 0)
                            <div class="row mt-4">
                                @foreach($post->pictures as $picture)
                                    <div class="col-md-6 mb-3">
                                        <img src="{{ Storage::url('public/posts_images/' . $picture->path) }}" alt="post image" class="img-fluid rounded">
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <div class="mt-4">
                            @if($post->isLikedByUser(auth()->id()))
                            
                            @else
                                <button id="like-button" class="btn btn-primary">Like</button>
                            @endif
                            <span id="like-count">{{ $post->likesCount() }}</span> likes
                            <a href="{{ route('comments.show', $post) }}" class="btn btn-link">View Comments</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection



@push('scripts')
<script>
    $(document).ready(function() {
        $('#like-button').click(function() {
            var postId = '{{ $post->id }}';
            var button = $(this);

            $.ajax({
                type: 'POST',
                url: '/posts/' + postId + '/like',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        var likeCount = parseInt($('#like-count').text());
                        var isChecked = button.prop('checked'); // Check if the button is checked or unchecked

                        if (isChecked) {
                            // User has liked the post, so update the like count and button text
                            likeCount++;
                            button.val('Unlike'); // Update the button text using val()
                        } else {
                            // User has unliked the post, so update the like count and button text
                            likeCount--;
                            button.val('Like'); // Update the button text using val()
                        }
                        $('#like-count').text(likeCount);
                    }
                }
            });
        });
    });
</script>
     <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
@endpush


