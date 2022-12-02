@extends('layout')

@section('title', 'Basket')

@section('content')
 <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
 <link rel="stylesheet" href="css/basket.css">
 <div class="container-log">
      <div class="title">Basket</div>
      <br>
      <table class="fn_table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @php($total = 0)
            @forelse($data as $product)
            <tr>
                
                <div class = "text">
                <td><img style='width:100%;' src="{{asset('storage/product-images/'.$product['image'])}}"></td>
                <td>{{$product['name']}}</td>
                <td>{{$product['price']}}</td>
                <td class="fn_quantity">
                    <a href="{{route('updateQuantity',['add',$product['id']])}}"><button class="add" style="background-color: forestgreen;">+</button></a>
                    {{$product['quantity']}}
                    <a href="{{route('updateQuantity',['deduct',$product['id']])}}"><button class="minus" style="background-color: red;">-</button></a>
                </td>
            </div>
            </tr>
            @php($total += $product['total']) 
            @empty
                <td>No products</td>
            @endforelse 

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <tr>
                <td colspan='3' align='right'>Total</td>
                <td align='middle'><?= number_format($total, 2) ?></td>
                <td>
                    <form action="{{route('checkout-cart')}}" method="post">
                        @csrf
                        <input type='hidden' name='hidden_total' value="{{$total}}" />
                        <button type="submit">Checkout</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>



<!-- <div class="container">
    <div class="row shadow p-3 mb-5 bg-white rounded"">
        <div class="well">
            <div class="row">
                <div class="text-center">
                    <h1>Basket</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Name</th>
                            <th style="text-align: center">#</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php($total = 0)
                    @forelse($data as $product)
                        <tr>
                            <td class="col-sm"><img style='height:5rem;'src={{asset('storage/product-images/'.$product['image'])}}></td>
                            <td class="col-sm" ><em>{{$product['name']}}</em></td>
                            <td class="col-sm" style="text-align: center">
                            <a href="{{route('updateQuantity',['add',$product['id']])}}"><button class="btn btn-success mx-2">+</button></a>
                                {{$product['quantity']}}
                                <a href="{{route('updateQuantity',['deduct',$product['id']])}}"><button class="btn btn-danger mx-2 ">-</button></a>
                            </td>
                            <td class="col-sm text-center">£{{$product['price']}}</td>
                            <td class="col-sm text-center">£{{$product['price']*$product['quantity']}}</td>
                        </tr>
                    @php($total += $product['total']) 
                    @empty
                        <td>No products</td>
                    @endforelse 
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>£<?= number_format($total, 2) ?></strong></h4></td>
                        </tr>                      
                    </tbody>
                </table>
                <form action="{{route('checkout-cart')}}" method="post">
                    @csrf
                    <input type='hidden' name='hidden_total' value="{{$total}}" />
                    <button type="submit" class="btn btn-success btn-lg btn-block">Checkout</button>
                </form>
                </td>
            </div>
        </div>
    </div>
</div> -->

@if(Session::has('success'))
<div class="alert alert-success">{{Session::get('success')}}</div>
@endif
@if(Session::has('fail'))
<div class="alert alert-danger">{{Session::get('fail')}}</div>
@endif

@endsection