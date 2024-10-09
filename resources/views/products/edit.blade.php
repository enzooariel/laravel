@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<h1>Edit Product</h1>
<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" class="form-control" required>{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection