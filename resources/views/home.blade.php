<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet" />
    <link rel="stylesheet" href="css/page1.css" />
    <link rel="stylesheet" href="css/home.css" />
    <title> Stance </title>
    <link rel="icon" type="Images" href="images/Logo_Draft_2.png">
</head>

<body>

    <!-- header for search bar and basket/login/signup stuff
                gonna do that l8r -->
    <div class="header">
        <ul>
            <h2> STANCE </h2>
            <li><a href="{{url('login')}}" class="header-link">LOGIN</a></li>
            <li><a href="{{url('register')}}" class="header-link">SIGN UP</a></li>
            <li><a href="Basket.html" class="header-link">BASKET</a></li>
    </div>
    </div>
    </ul>
    </div>

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

    <div class="row">
        <div class="col-1">
            <h2> STANCE</h2>
            <h3> Welcome to the launch of Stance!</h3>
            <!--<button type ="button"> Shop Now <img src ="arrow.png">
         </button>-->
            <button onclick="window.location.href = '{{url('products')}}'">Shop Now<img src="images/arrow.png"></button>
        </div>
        <div class="col-2">
            <img src="images/shoe01 img.png" class="shoe1">

        </div>
    </div>

    <div class="slider">
        <div class="myslide fade">
            <div class="txt">
                <h1>STANCE</h1>
                <p>Find out more about your style</p>
            </div>
            <img src="images/slideshow-shoe4.jpg" style="width: 100%; height: 100%;">
        </div>

        <div class="myslide fade">
            <div class="txt">
            </div>
            <img src="images/slideshow8.jpg" style="width: 100%; height: 100%;">
        </div>

        <div class="myslide fade">
            <div class="txt">
            </div>
            <img src="images/slideshow6.jpg" style="width: 100%; height: 100%;">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="dotsbox" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>




    <!--<div class = "slideshow-container">
    <div class = "mySlides fade">
        <img src="images/slideshow-shoe-1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="images/slideshow-shoe-2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="images/slideshow-shoe-3.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>

</div> -->



    <div class="best-sellers">
        <h2> BEST-SELLERS</h2>
        <img src="images/shoe01 img.png" alt="shoe1" class="best-seller-1">

        <img src="images/shoes02 img.png" class="best-seller-2">

        <img src="images/shoe03 img.png" class="best-seller-3">

    </div>

    <!--<div class = "shop-by-category">
       <h2> SHop by category box</h2>
    </div>-->


    <div id="about-us">
        <!-- refer to proj brief for about us page/section -->
        <h2> STANCE</h2>
        <h3> We stand for something bigger than sneakers. We champion those who are fearlessly driven by their passions. We elevate sport. We do right by people and the planet. Together we drive meaningful change in communities around the world. The upcoming generations love their shoes so if you’re between the ages of 16-28 make sure your on stance upgrading your shoes with every fit. Our resellers are the heart of our product line, giving them a platform to distribute their purchased products. The products displayed are all checked before shipped to ensure our clients have no issues with their purchases.</h3>

    </div>
    <!-------------------Footer--------------------------------------------->

    <footer class="footer">
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