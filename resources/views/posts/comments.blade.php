@extends('layouts.app')
<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h2>{{ $post->title }}</h2>
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
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h2>Comments</h2>
                    </div>

                    <div class="card-body">
                        @foreach($comments as $comment)
                            <div class="media mb-4">
                                <img src="{{ $comment->user->pic_path }}" alt="{{ $comment->user->name }}" class="mr-3 rounded-circle" width="50" height="50">

                                <div class="media-body">
                                    <h5 class="mt-0">{{ $comment->user->name }}</h5>
                                    <p>{{ $comment->content }}</p>
                                    <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2>Add Comment</h2>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('comments.store', $post) }}">
                            @csrf

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" rows="5" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
