@extends('layout')

@section('title', 'Welcome')

@section('content')

<div class="cards">
    @forelse($data as $product)
    <div class="card">
        <img src="{{asset('storage/product-images/'.$product->imgPath)}}" alt="shoe1" style="width:100%">
        <h1>{{$product->name}}</h1>
        <p class="price">£{{$product->price}}</p>
        <p>{{$product->desc}}</p>
        <p><button>Add to cart</button></p>
    </div>
    @empty
    <p>No available products</p>
    @endforelse
</div>

@endsection