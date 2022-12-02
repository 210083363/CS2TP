@extends('layout')

@section('title', 'Welcome')

@section('content')
<script type="text/javascript" src="{{asset('app.js')}}"></script>
<link rel="stylesheet" href="css/products.css">

<div class="cards">
    @forelse($data as $product)

    <div class="card">
        <img src="{{asset('storage/product-images/'.$product->imgPath)}}" alt="shoe1" style="width:20rem">
        <h1 style="font-family: arial;">{{$product->name}}</h1>
        <p class="price">£{{$product->price}}</p>
        <p>{{$product->desc}}</p>
        <form action="{{route('add-to-basket')}}" method="post">
            @csrf
            <input type='hidden' name='hidden_id' value="{{$product->id}}" />
            <input type='hidden' name='hidden_name' value="{{$product->name}}" />
            <input type='hidden' name='hidden_price' value="{{$product->price}}" />
            <input type='hidden' name='hidden_image' value="{{$product->imgPath}}" />
            <p><button class="cart_button" type="submit" value="Add to cart" @if($product->stock == 0) disabled='disabled' @endif>Add to cart</button></p>

        </form>
    </div>
    @empty
    <td>No products</td>
    <a href="{{url('logout')}}">Logout</a>
    <a href="{{url('home')}}"><button>Home</button></a>

    @endforelse
    <script type="text/javascript">
        document.getElementById("hideAll").style.display = "block";
    </script>
    <div style="display: none" id="hideAll">&nbsp;</div>
</div>

@endsection