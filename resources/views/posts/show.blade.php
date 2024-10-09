@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
<h1>{{ $post->title }}</h1>
@if ($post->image)
    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->title }}">
@endif
<p>{{ $post->content }}</p>
<a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
@endsection