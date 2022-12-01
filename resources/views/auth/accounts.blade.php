@extends('layout')

@section('title', 'Welcome')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">group</th>
      <th scope="col">join_date</th>
    </tr>
  </thead>
  <tbody>
    @forelse($data as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <form>
        @csrf
        
        <td><input type="number" value="{{$user->group}}" name="group">{{$user->group}}</td>
      </form>
      <td>{{$user->created_at}}</td>
    </tr>
    @empty
    <td>No products</td>
    @endforelse
  </tbody>
</table>
@endsection