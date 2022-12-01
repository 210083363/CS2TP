@extends('layout')

@section('title', 'Welcome')

@section('content')
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title Log-In Page></title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="page1.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="container-log">
    <div class="title">Log-In</div>
    <div class="content">
        <form action="{{route('login-user')}}" method="post">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <div class="user-details">

                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" class="form-control" placeholder="Enter you email" name="email" value="{{old('email')}}" required>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div> 
                    <div class="input-box">

                    <span class="details">Password</span>
                    <input type="password" class="form-control" placeholder="Enter you password" name="password" value="" required>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
            </div>
            <div class="button">
                        <input type="submit" value="Login">
                </div>
        </form>
        <div class="existing-account-log">
              <span class="under-button">Dont have an account?</span>
              <span class="under-button-link">
                  <button class="button-link"><a style="text-decoration: none; color:inherit;" href="{{url('register')}}">Sign up</a></button>
              </span>
          </div>
        
    </div>
</div>
    @endsection