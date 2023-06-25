<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Valu Billfold</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/avatar/logo.png')}}" rel="icon">
    <link href="{{('website/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{asset('website/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('website/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: DevFolio
    * Updated: May 30 2023 with Bootstrap v5.3.0
    * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between" style="background-color: balck">

        <a href="{{route('website')}}" class="logo">
            @if(!empty(\App\Models\ContactUs::select('logo')->first()->logo))
                <img src="{{\App\Models\ContactUs::select('logo')->first()->logo}}" width="120px" height="120px">
            @else
                <img src="{{'img/avatar/logo.png'}}" width="120px" height="120px">
            @endif
        </a>

        <h1 class="logo"><a href="{{route('website')}}}">Valu Billfold</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#">Home</a></li>
                <li><a class="nav-link scrollto" href="#">About</a></li>
                <li><a class="nav-link scrollto" href="#">Services</a></li>
                <li><a class="nav-link scrollto " href="#">Work</a></li>
                <li><a class="nav-link scrollto " href="#">Subscription</a></li>
                <li><a class="nav-link scrollto " href="#">Blog</a></li>
                <li><a class="nav-link scrollto" href="#">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<div class="hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="hero-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="hero-title mb-4">Portfolio Details</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="{{route('website')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Portfolio Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @foreach ((json_decode($Portfolio->detailsImage)) as $image)
                                <div class="swiper-slide">
                                    <img height="500px"  src='{{$image}}' alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>:{{$Portfolio->category}}</li>
                            <li><strong>Client</strong>: {{$Portfolio->client}}</li>
                            <li><strong>Project date</strong>:{{$Portfolio->created_at}}</li>
                            <li><strong>Project URL</strong>: <a href="{{$Portfolio->url}}">{{$Portfolio->url}}</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>{{\Illuminate\Support\Str::limit($Portfolio->description,150)}}</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright-box">
                    <p class="copyright">&copy; Copyright <strong> <a href="https://doctor-code.net/">Dr Code</a></strong>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer><!-- End  Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('website/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{('website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('website/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('website/assets/vendor/typed.js/typed.umd.js')}}"></script>
<script src="{{asset('website/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('website/assets/js/main.js')}}"></script>

</body>

</html>
