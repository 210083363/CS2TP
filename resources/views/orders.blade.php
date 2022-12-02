@extends('layout')

@section('title', 'Welcome')

@section('content')


<link rel="stylesheet" href="css/basket.css">
@forelse($data as $order)
<div class="container-log">
     <div class="title"><h4>OrderID: {{$order['id']}} </h4></div>
     <br>
     <table class="fn_table">
       <thead class="thead-dark">
           <tr>
               @if ($user->group > 1) <th scope="col">Name</th>@endif
               <th scope="col">Product</th>
               <th scope="col">Quantity</th>
               <th scope="col">Price</th>
           </tr>
       </thead>
       <tbody>
           @php($total = 0)
           @forelse($order['sales'] as $sale)
           <tr>
            @if ($user->group > 1) <td>{{$order['user']->name}}</td> @endif
            <td>{{$sale['name']}}</td>
            <td>{{$sale['quantity']}}</td>
            <td>£{{$sale['price']}}</td>
            </tr>
           {{-- @php($total += $product['total'])  --}}
           @empty
               <td>No products</td>
           @endforelse 
           <tr>
                @if ($user->group > 1) <td colspan='3'>{{$order['user']->name}}</td>
                @else <td colspan='2'>Total</td>  @endif
               <td>£{{$order['total_price']}}</td>
           </tr>
       </tbody>
   </table>
</div>
@empty
<div class="container-log">
  <div class="title">No orders</h4></div>
</div>
@endforelse 

@endsection