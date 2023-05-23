@extends('layouts.app')

<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

                        <div class="mt-4">
                            @if($post->isLikedByUser(auth()->id()))
                                <button id="like-button" class="btn btn-primary">Unlike</button>
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
                    if (button.text() === 'Like') {
                        // User has liked the post, so update the like count and button text
                        likeCount++;
                        button.text('Unlike');
                    } else {
                        // User has unliked the post, so update the like count and button text
                        likeCount--;
                        button.text('Like');
                    }
                    $('#like-count').text(likeCount);
                }
            }
        });
    });
});

    </script>
@endpush
