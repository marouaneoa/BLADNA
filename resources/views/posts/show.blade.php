@extends('layouts.app')
<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-black">
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
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endpush
