@extends('layouts.app')
<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
@section('main')
<div class="container">
    <h1 class="mb-4">Last 10 posts</h1>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                @if ($post->pictures->count() > 0)
                <img src="{{ Storage::url('public/posts_images/' . $post->pictures->first()->path) }}" class="card-img-top" alt="post image">
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h5>
                    <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated: {{ $post->updated_at->diffForHumans() }}</small>
                </div>
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
