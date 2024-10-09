@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<h1>Edit Post</h1>
<form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea name="content" id="content" class="form-control" required>{{ $post->content }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection