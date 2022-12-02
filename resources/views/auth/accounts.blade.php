@extends('layout')

@section('title', 'Welcome')

@section('content')
<link rel="stylesheet" href="css/basket.css">
<div class="container-log">
  <div class="title">
    <h4>Accounts </h4>
  </div>
  <br>
  <table class="fn_table">
    <thead class="thead-dark">
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
        <form action="{{route('update-account')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" , value="{{$user->id}}" name='id'>
          <td><input type="number" value="{{$user->group}}" name="group"></td>
          <td>{{$user->created_at}}</td>
          <td><input type="submit" value="Save" class="form-submits"></td>
        </form>
      </tr>
      @empty
      <div class="container-log">
        <div class="title">No products</h4>
        </div>
      </div>
      @endforelse
    </tbody>
  </table>
</div>
@endsection