@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
</div>
<div class="row">
    @foreach ($posts as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection