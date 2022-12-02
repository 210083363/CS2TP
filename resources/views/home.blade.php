@extends('layout')

@section('title', 'Basket')

@section('content')



<div class="row">
    <div class="col-1">
        <h2> STANCE</h2>
        <h3> Welcome to the launch of Stance!</h3>
        <!--<button type ="button"> Shop Now <img src ="arrow.png">
         </button>-->
        <button onclick="window.location.href = '{{url('products')}}' " class="shopnow">Shop Now<img src="images/arrow.png"></button>
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
    <div>
        <img src="images/shoe01 img.png" alt="shoe1" class="best-seller-1">

        <img src="images/shoes02 img.png" class="best-seller-2">

        <img src="images/shoe03 img.png" class="best-seller-3">
    </div>
</div>

<!--<div class = "shop-by-category">
       <h2> SHop by category box</h2>
    </div>-->



@endsection