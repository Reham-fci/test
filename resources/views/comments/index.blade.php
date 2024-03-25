@extends('layout.layout')

@section('content')
    <div class="container">
        <h1>Create Comment</h1>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div class="form-group">

                <input type="hidden" class="form-control" id="post_id" name="post_id" value="{{$id}}" >
            </div>
            <div class="form-group">
                <label for="title">Comment</label>
                <input type="text" class="form-control" id="title" name="comment" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
