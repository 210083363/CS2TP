@extends('layout')

@section('title', 'Welcome')

@section('content')

@forelse($data as $order)
<h4>OrderID: {{$order['id']}} </h4>
<table class="table">

  <thead class="thead-dark">
    <tr>
      @if ($user->group > 1) <th scope="col">User</th> @endif
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>

    </tr>
  </thead>
  <tbody>

    @foreach($order['sales'] as $sale)
    <tr>
      @if ($user->group > 1) <td>{{$order['user']->name}}</td> @endif
      <td>{{$sale['name']}}</td>
      <td>{{$sale['quantity']}}</td>
      <td>{{$sale['price']}}</td>
    </tr>
    @endforeach
    <tr>
      @if ($user->group > 1) <td></td> @endif
      <td></td>
      <td></td>
      <td><b>Total: {{$order['total_price']}}</b></td>
    </tr>
  </tbody>
</table>
@empty
<td>No orders</td>
@endforelse
</tbody>
</table>

<a href="{{url('home')}}"><button>Home</button></a>

@endsection