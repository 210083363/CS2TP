@extends('layout')

@section('title', 'Welcome')

@section('content')
<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script defer src="page1.js"></script>

</head>

<body>
    <nav class="navbar">
        <div class="hamburger-menu">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>

        <ul class="nav-list">
            <li class="nav-item">
                <a href="HomePage.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="NewProductsPage.html" class="nav-link">Products Page</a>
            </li>
            <li class="nav-item">
                <a href="#about" class="nav-link">About us</a>
            </li>
            <li class="nav-item">
                <a href="#contact-us" class="nav-link">Contact us</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="title">Sign-Up</div>
        <div class="content">
            <form action="{{route('register-user')}}" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @if(Session::has('mismatch'))
                <div class="alert alert-danger">{{Session::get('mismatch')}}</div>
                @endif
                @csrf
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>

                        <input type="text" class="details" placeholder="Enter your name" name="name" value="{{old('name')}}" required>
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" value="{{old('email')}}" required>
                        <span class=" text-danger">@error('email') {{$message}} @enderror</span>

                    </div>

                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter your password" name="password" value="" required>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>

                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" placeholder="Re-enter Password" name="password2" value="" required>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>

                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your phone number" required>
                    </div>


                </div>
                <div class="contact-choices">
                    <input type="radio" name="choice" id="choice-one">
                    <input type="radio" name="choice" id="choice-two">
                    <input type="radio" name="choice" id="choice-three">
                    <span class="choice-title">Prefered Contact</span>
                    <div class="category">
                        <label for="choice-one">
                            <span class="dot one"></span>
                            <span class="contact">Email</span>
                        </label>
                        <label for="choice-two">
                            <span class="dot two"></span>
                            <span class="contact">Phone Number</span>
                        </label>
                        <label for="choice-three">
                            <span class="dot three"></span>
                            <span class="contact">Both</span>
                        </label>
                    </div>
                </div>
                <div class="tacbox">
                    <input id="checkbox" type="checkbox" required />
                    <label for="checkbox"> By signing up you agree to these <a href="#">Terms and Conditions</a>.</label>
                </div>
                <div class="button">
                    <input type="submit" value="Create account">

                </div>

            </form>
            <div class="existing-account">
                <span class="under-button">Already have an account?</span>
                <span class="under-button-link">
                    <button class="button-link">
                        <a style="text-decoration: none; color:inherit;" href="{{url('login')}}">Login</a>
                    </button>
                </span>
            </div>
        </div>

    </div>


</body>

</html>

@endsection