@extends('layout')

@section('title', 'Welcome')

@section('content')
<script type="text/javascript" src="{{asset('app.js')}}"></script>

<div class="cards">
    @forelse($data as $product)
    <div class="card">
        <img src="{{asset('storage/product-images/'.$product->imgPath)}}" alt="shoe1" style="width:100%">
        <h1>{{$product->name}}</h1>
        <p class="price">£{{$product->price}}</p>
        <p>{{$product->desc}}</p>
        <form action="{{route('add-to-basket')}}" method="post">
            @csrf
            <input type='hidden' name='hidden_id' value="{{$product->id}}" />
            <input type='hidden' name='hidden_name' value="{{$product->name}}" />
            <input type='hidden' name='hidden_price' value="{{$product->price}}" />
            <p><button type="submit" value="Add to cart" @if($product->stock == 0) disabled='disabled' @endif>Add to cart</button></p>

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