<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('endUserAssets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('endUserAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('endUserAssets/assets/css/templatemo-digimedia-v1.css')}}">
    <link rel="stylesheet" href="{{asset('endUserAssets/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('endUserAssets/assets/css/owl.css')}}">
    @stack('css')
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Pre-header Starts -->
<div class="pre-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8 col-7">
                <ul class="info">
                    <li><a href="mailto:digimedia@company.com"><i class="fa fa-envelope"></i>{{$setting->email}}</a></li>
                    <li><a href="tel:0100200340"><i class="fa fa-phone"></i>{{$setting->phone}}</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-4 col-5">
                <ul class="social-media">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Pre-header End -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('endUser.index')}}" class="logo">
                        <img src="{{asset('endUserAssets/assets/images/logo-v1.png')}}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="#top" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><div class="border-first-button"><a href="#contact">Contact Us</a></div></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
