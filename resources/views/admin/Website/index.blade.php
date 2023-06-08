<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DevFolio Bootstrap Portfolio Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('website/assets/img/favicon.png')}}" rel="icon">
    <link href="{{('website/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{asset('website/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('website/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/subsc/Style.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/subsc/mobile-style.css')}}" rel="stylesheet">

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

        <a href="{{route('website')}}" class="logo"><img src="{{asset('img/avatar/logo.png')}}" width="120px" height="120px"></a>
        <h1 class="logo"><a href="{{route('website')}}}">Valu Billfold</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto " href="#work">Work</a></li>
                <li><a class="nav-link scrollto " href="#Subscription">Subscription</a></li>
                <li><a class="nav-link scrollto " href="#blog">Blog</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                
                @foreach($annoncements as $annoncement)
                <div class="carousel-item active">
                    <img src="{{$annoncement->image}}" style="width: 100%;height: 700px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$annoncement->title}}</h5>
                        <p>{{\Illuminate\Support\Str::limit($annoncement->description,100)}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </div>
</div><!-- End Hero Section -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="{{$aboutUs->image}}" class="img-fluid rounded b-shadow-a" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">location: </span> <span>{{$contactUS->address}}</span></p>
{{--                                            <p><span class="title-s">Profile: </span> <span>full stack developer</span></p>--}}
                                            <p><span class="title-s">Email: </span> <span>{{$contactUS->email}}</span></p>
                                            <p><span class="title-s">Phone: </span> <span>{{$contactUS->phone}}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About US
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        {{$aboutUs->description}}
                                    </p>
{{--                                    <p class="lead">--}}
{{--                                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis--}}
{{--                                        porttitor volutpat. Vestibulum--}}
{{--                                        ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.--}}
{{--                                    </p>--}}
{{--                                    <p class="lead">--}}
{{--                                        Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.--}}
{{--                                        Nulla porttitor accumsan--}}
{{--                                        tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.--}}
{{--                                    </p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Services
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><img src="{{$service->image}}" class="rounded-circle img-fluid" style="width: 100%;height: 100%"></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">{{$service->name}}</h2>
                            <p class="s-description text-center">{{\Illuminate\Support\Str::limit($service->description,150)}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-check"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
                            <span class="counter-text">WORKS COMPLETED</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
                            <span class="counter-text">YEARS OF EXPERIENCE</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-people"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="{{$Clients}}" data-purecounter-duration="1" class="counter purecounter"></p>
                            <span class="counter-text">TOTAL CLIENTS</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-award"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
                            <span class="counter-text">AWARD WON</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Portfolio
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Portfolios as $Portfolio)
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="{{$Portfolio->image}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="{{$Portfolio->image}}" style="width: 100%;height: 300px" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">{{$Portfolio->name}}</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">{{$Portfolio->category}}</span> / <span class="w-date">{{$Portfolio->created_at}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="{{url('Website/Portfolio/portfolio-details',$Portfolio->id)}}"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            @foreach($companies as $company)
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="author-test">
                                        <img src="{{$company->image}}" alt="" width="200px" height="100px" class="rounded-circle b-shadow-a">
                                        <span class="author">{{$company->name}}</span>
                                    </div>
                                    <div class="content-test">
                                        <p class="description lead">{{\Illuminate\Support\Str::limit($company->description,150)}}</p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">

                </div> -->
                </div>
            </div>
        </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Blog
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Blogs as $Blog)
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="{{url('Website/Blog/blog-single',$Blog->id)}}"><img src="{{$Blog->image}}" alt="" class="img-fluid" style="width: 100%;height: 200px"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">{{$Blog->category}}</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="{{url('Website/Blog/blog-single',$Blog->id)}}">See more ideas about {{$Blog->category}}</a></h3>
                            <p class="card-description">{{\Illuminate\Support\Str::limit($Blog->description,120)}}</p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="{{\App\Models\Admin::where('id',$Blog->admin_id)->select('image')->first()->image}}" alt="" class="avatar rounded-circle">
                                    <span class="author">{{\App\Models\Admin::where('id',$Blog->admin_id)->select('*')->first()->name}}</span>
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="bi bi-clock"></span> {{$Blog->created_at->diffForHumans()}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Blog Section -->
    <!-- ======= Subscription Section ======= -->
    <section id="Subscription" class="section-2 container-fluid p-0">


        <div class="purchase text-center">
            <h1>Subscribe to any subscription you want</h1>
            <p>
                We will start working on your subscription immediately!.
            </p>
            <div class="cards">
                <div class="d-flex flex-row justify-content-center flex-wrap">
                    @foreach($subscriptions as $subscription)
                    <div class="card">
                        <div class="card-body">
                            <div class="title">
                                <h5 class="card-title">{{$subscription->title}}</h5>
                            </div>
                            <p class="card-text">
                                {{$subscription->description}}.
                            </p>
                            <div class="pricing">
                                <h1>${{$subscription->price}}</h1>
                                <form method="get">
                                    <a href="{{url('stripe',$subscription->id)}}" class="btn btn-dark px-5 py-2 primary-btn mb-5">Subscribe Now</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ======= End of Subscription Section ======= -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Send Message Us
                                        </h5>
                                    </div>
                                    <div>
                                        <form class="row contact_form" action="{{route("ContactStore")}}" autocomplete="off" method="post" id="contactForm" novalidate="novalidate">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center mt-4">
                                                    <button type="submit" value="submit" class="button button-a button-big button-rouded">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @foreach($contacts as $contact)
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Get in Touch
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">{{$contact->description}}</p>
                                        <ul class="list-ico">
                                            <li><span class="bi bi-geo-alt"></span> {{$contact->address}} .  ST {{$contact->street}}</li>
                                            <li><span class="bi bi-phone"></span> {{$contact->phone}}</li>
                                            <li><span class="bi bi-envelope"></span>{{$contact->email}}</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="{{$contact->facebook}}"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                                            <li><a href="{{$contact->instagram}}"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                                            <li><a href="{{$contact->twitter}}"><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                                            <li><a href="{{$contact->linkedin}}"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                                            <li><a href="{{$contact->tiktok}}"><span class="ico-circle"><i class="bi bi-tiktok"></i></span></a></li>
                                            <li><a href="{{$contact->PlayStore}}"><span class="ico-circle"><i class="bi bi-google-play"></i></span></a></li>
                                            <li><a href="{{$contact->AppleStore}}"><span class="ico-circle"><i class="bi bi-apple"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright-box">
                    <p class="copyright">&copy; Copyright <strong> <a href="https://bootstrapmade.com/">Dr Code</a></strong>. All Rights Reserved</p>
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
