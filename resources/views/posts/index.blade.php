@extends('layouts.app')
<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/assets/css/posts.css">
@section('main')
<div class="container">
    <center><h1 class="head-title">Last Posts</h1></center>
    <div class="row">
        @foreach ($posts as $post)
        <div class="card">
            <div class="card-image" style="background-image: url('{{ Storage::url('public/posts_images/' . $post->pictures->first()->path) }}')">
                
            </div>
            <div class="category">
                <a href="/posts/{{ $post->id }}">{{ $post->wilaya }}</a>
            </div>
            <div class="heading"> {{ Str::limit($post->body, 50) }}
                <div class="author"> By <span class="name">{{ $post->user->name }} </span>{{ $post->updated_at->diffForHumans() }} </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('styles')
<style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .card-title a:hover {
        text-decoration: none;
    }

</style>
@endpush
