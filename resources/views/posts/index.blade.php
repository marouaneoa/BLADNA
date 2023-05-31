@extends('layouts.app')

<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/assets/css/posts.css">

@section('main')
    @auth
    <a class="mother" href="{{ route('posts.create') }}">
    <button class="button"></button></a>
    @endauth
    <center><h1 class="head-title">Last Posts</h1></center>

    @if($posts->isEmpty())
<center><p style="margin-top: 5rem">No posts found</p></center>
    @else
    <div class="sec__explore--1">
    @foreach($posts as $index => $post)
    
        @if($index % 3 == 0)
            <div class="sec__rect--main--red">
        @else
            <div class="sec__rect--main">
        @endif

            <!-- upper date + location-->
            <div class="exp--1">
                <div class="exp__locat">
                    <img class="sec__icon--location" src="pics/location.png" />
                    <a class="sec__txt--location" href="/posts/{{ $post->id }}">{{ $post->thewilaya->name }}</a>
                </div>
                <h5 class="exp__date"> {{ $post->updated_at->diffForHumans() }}</h5>
            </div>
            <!--PHOTOS-->
            <div class="sec__rect">
                @if ($post->pictures->count() >= 3)
                <div class="sec__rect--1" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[0]->path) }})"></div>
                <div class="rec__parent">
                    <div class="sec__rect_small sec__rect--2" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[1]->path) }})"></div>
                    <div class="sec__rect_small sec__rect--3" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[2]->path) }})"></div>
                </div>
                
                @elseif ($post->pictures->count() == 2)
                <div class="rec__parenthalf">
                    <div class="sec__rect_half half--1" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[0]->path) }})"></div>
                    <div class="sec__rect_half half--2" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[1]->path) }})"></div>
                </div>
                @elseif ($post->pictures->count() == 1)
                <div class="sec__rect--big" style="background-image: url({{ Storage::url('public/posts_images/' . $post->pictures[0]->path) }})"></div>
                @endif

            </div>
            <div class="sec__profiles">
                <div class="sec__profile">
                    <div class="sec__profile--circle" style="background-image: url({{ Storage::url('public/posts_images/' . $post->user->pic_path) }})"></div>
                    <h5 class="sec__profile--txt1">{{ $post->user->name }}</h5>
                </div>
                <div class="sec__profile--txt2">
                    {{ $post->body }}
                </div>
            </div>
            <!-- BAR-->
            <div class="sec__bar">
                <div class="sec__bar__icon">
                    <img class="sec__bar__icon--1" src="pics/filled_heart.png" />
                    <h5 class="sec__bar__icon--txt1">{{$post->likesCount()}}</h5>
                </div>
                <div class="sec__bar__icon">
                    <img class="sec__bar__icon--1" src="pics/Bubblechat.png" />
                    <h5 class="sec__bar__icon--txt1">60</h5>
                </div>
               
            </div>
    </div>
    
    @endforeach
    @endif
    </div>
@endsection
