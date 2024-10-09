@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<h1>{{ $product->name }}</h1>
@if ($product->image)
    <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
@endif
<p>{{ $product->description }}</p>
<p>${{ $product->price }}</p>
<a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
@endsection