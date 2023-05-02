@extends('layouts.app')

@section('main')
    <div class="container">
        <h1>Last 10 posts</h1>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        @if ($post->pictures->count())
                            <img src="{{ Storage::url('public/posts_images/' . $post->pictures->first()->path) }}" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <a class="card-title" href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
