<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet" />
    <link rel="stylesheet" href="css/page1.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/signup.css" />
    <link rel="stylesheet" href="css/login.css" />
    <title> Stance </title>

    <link rel="icon" type="Images" href="images/Logo_Draft_2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet" />
    <script defer src="page1.js"></script>
</head>

<body>

    <!-- header for search bar and basket/login/signup stuff
                gonna do that l8r -->
    <header class="header">
        <ul>
            <h2> STANCE </h2>
            <div id="header-sub">
                <li><a href="{{url('login')}}" class="header-link">LOGIN</a></li>
                <li><a href="{{url('register')}}" class="header-link">SIGN UP</a></li>
                <li><a href="{{url('basket')}}" class="header-link">BASKET</a></li>
            </div>
        </ul>

    </header>


    <nav class="navbar">
        <div class="hamburger-menu">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>

        <ul class="nav-list">
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            <li class="nav-item">
                <a href="{{url('products')}}" class="nav-link">Products Page</a>
            </li>
            <li class="nav-item">
                <a href="#about-us" class="nav-link">About us</a>
            </li>
            <li class="nav-item">
                <a href="#footer" class="nav-link">Contact us</a>
            </li>
        </ul>
    </nav>





    <!--<div class = "shop-by-category">
       <h2> SHop by category box</h2>
    </div>-->

    @yield('content')

    <!-------------------Footer--------------------------------------------->

    <footer class="footer" class="shadow p-3 mb-5 bg-white rounded">
        <div id="about-us">
            <!-- refer to proj brief for about us page/section -->
            <h2> About us</h2>
            <h3> We stand for something bigger than sneakers. We champion those who are fearlessly driven by their passions. We elevate sport. We do right by people and the planet. Together we drive meaningful change in communities around the world. The upcoming generations love their shoes so if you’re between the ages of 16-28 make sure your on stance upgrading your shoes with every fit. Our resellers are the heart of our product line, giving them a platform to distribute their purchased products. The products displayed are all checked before shipped to ensure our clients have no issues with their purchases.</h3>

        </div>
        <div class="footer-content">
            <div id="first-box" class="box">
                <div id="first-box-header">
                    <h3>Email for Enquires</h3>
                </div>
                <div id="email-box">
                    <p>
                        For any enquires regarding the website <br>
                        as well as problems with orders.
                    </p>
                </div>
            </div>
            <div id="second-box" class="box">
                <div id="second-box-header">
                    <h3>STANCE</h3>
                </div>
                <div id="courses-box">
                    <p>
                        We stand for something bigger than sneakers. <br>
                        We champion those who are fearlessly driven by their passions. <br>
                        We elevate sport. <br>

                    </p>
                </div>
            </div>
            <div id="third-box" class="box">
                <div id="third-box-header">
                    <h3>Contact Emails</h3>
                </div>
                <div id="contact-box">
                    <ul>
                        <li>Email for Enquires:<br>
                            <strong>stance-enquires.stance.ac.uk</strong>
                        </li>
                        <li>Email for delivery support:<br>
                            <strong>stance-delivery.stance.ac.uk</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="app.js"> </script>
</body>

</html>