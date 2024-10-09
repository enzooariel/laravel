@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<h1>Create Product</h1>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection