@extends('layout')

@section('title', 'Welcome')

@section('content')
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title Log-In Page></title>
    <link rel="stylesheet" href="LOG-style.css">
    <link rel="stylesheet" href="page1.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


    <form action="{{route('login-user')}}" method="post">
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
        <div class="col-md-4 col-md-offset-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
            <span class="text-danger">@error('email') {{$message}} @enderror</span>
            <br>

            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" value="">
            <span class="text-danger">@error('password') {{$message}} @enderror</span>
            <br>

            <button type="submit">Login</button>
            <a href="{{url('register')}}">Register here</a>
        </div>
    </form>

    @endsection