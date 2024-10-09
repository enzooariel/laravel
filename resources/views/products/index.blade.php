@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
</div>
<div class="row">
    @foreach ($products as $product)
        <div class="col-md-4 mb-3">
            <div class="card">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">${{ $product->price }}</p>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
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