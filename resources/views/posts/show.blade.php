@extends('layout.layout')

@section('content')

@section('content')
    <div>
        <p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">All Posts</a>
        </p>
    </div>
    <div class="container">
        <h1>Post Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                @if($post->image)
                    <img src="{{ asset('image/' . $post->image) }}" class="img-fluid" alt="Post Image" width="100" height="100">
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <h1>Post comments</h1>
        <div class="card">
            @foreach($comments as $comment)
            <div class="card-body">
                <h5 class="card-title">{{ $comment->comment }}</h5>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@endsection
