<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="page1.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>@yield('title', 'Stance')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
    @yield('content')
</body>

</html>