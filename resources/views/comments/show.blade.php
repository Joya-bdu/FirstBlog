<!-- resources/views/comments/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Comment by {{ $comment->name }}</h2>
        <p>{{ $comment->body }}</p>
        <a href="{{ route('posts.show', $comment->post_id) }}">Back to Post</a>
    </div>
@endsection
