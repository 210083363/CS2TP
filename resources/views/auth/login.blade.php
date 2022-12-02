@extends('layout')

@section('title', 'Welcome')

@section('content')

<div class="container-log">
    <div class="title">Log in</div>
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
            <div class="fn_button_big">
                <input .shopnow type="submit" value="Login">
            </div>
        </form>
        <div class="existing-account-log">
            <span class="under-button">Dont have an account?</span>
            <span class="under-button-link">
                <button class="button-link" onclick="location.href='{{url('register')}}';">Sign up</button>
            </span>
        </div>

    </div>
</div>
@endsection