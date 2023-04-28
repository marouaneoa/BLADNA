@extends('layouts.app')

<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $post->title }}</h2>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>{{ $post->body }}</p>
                        </div>
                    </div>
                    @if($post->pictures->count() > 0)
                    <div class="row">
                        @foreach($post->pictures as $picture)
                        <div class="col-md-6 mt-2">
                            <img src="{{ asset($picture->path) }}" alt="post image" class="img-fluid">
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
    .card-header {
        background-color: #007bff;
        color: #fff;
    }

    img {
        max-width: 100%;
    }
</style>
@endpush
