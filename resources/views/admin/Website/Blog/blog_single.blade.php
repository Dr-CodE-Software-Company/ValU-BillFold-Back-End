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
    <link href="{{asset('Website/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Website/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Website/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('Website/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('Website/assets/css/style.css')}}" rel="stylesheet">

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
                <h2 class="hero-title mb-4">Blog Details</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="{{route('website')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Library</a>
                    </li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-box">
                        <div class="post-thumb">
                            <img src="{{$blog->image}}" style="height: 500px;width: 100%" class="img-fluid" alt="">
                        </div>
                        <div class="post-meta">
                            <h1 class="article-title">{{$blog->title}}</h1>
                            <ul>
                                <li>
                                    <span class="bi bi-person"></span>
                                    <a href="#">{{\App\Models\Admin::where('id',$blog->admin_id)->select('*')->first()->name}}</a>
                                </li>
                                <li>
                                    <span class="bi bi-tag"></span>
                                    <a href="#">{{$blog->category}}</a>
                                </li>
{{--                                <li>--}}
{{--                                    <span class="bi bi-chat-left-text"></span>--}}
{{--                                    <a href="#">14</a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                        <div class="article-content">
                            <p>{{$blog->description}}</p>
{{--                            <blockquote class="blockquote">--}}
{{--                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>--}}
{{--                            </blockquote>--}}
{{--                            <p>--}}
{{--                                Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit--}}
{{--                                aliquet elit, eget tincidunt--}}
{{--                                nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,--}}
{{--                                consectetur adipiscing elit. Donec sollicitudin molestie malesuada.--}}
{{--                            </p>--}}
                        </div>
                    </div>
{{--                    <div class="box-comments">--}}
{{--                        <div class="title-box-2">--}}
{{--                            <h4 class="title-comments title-left">Comments (34)</h4>--}}
{{--                        </div>--}}
{{--                        <ul class="list-comments">--}}
{{--                            <li>--}}
{{--                                <div class="comment-avatar">--}}
{{--                                    <img src="assets/img/testimonial-2.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="comment-details">--}}
{{--                                    <h4 class="comment-author">Oliver Colmenares</h4>--}}
{{--                                    <span>18 Sep 2017</span>--}}
{{--                                    <p>--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque--}}
{{--                                        ipsam temporibus maiores--}}
{{--                                        quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.--}}
{{--                                    </p>--}}
{{--                                    <a href="3">Reply</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="comment-avatar">--}}
{{--                                    <img src="assets/img/testimonial-4.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="comment-details">--}}
{{--                                    <h4 class="comment-author">Carmen Vegas</h4>--}}
{{--                                    <span>18 Sep 2017</span>--}}
{{--                                    <p>--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque--}}
{{--                                        ipsam temporibus maiores--}}
{{--                                        quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis,--}}
{{--                                        veritatis deserunt.--}}
{{--                                    </p>--}}
{{--                                    <a href="3">Reply</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="comment-children">--}}
{{--                                <div class="comment-avatar">--}}
{{--                                    <img src="assets/img/testimonial-2.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="comment-details">--}}
{{--                                    <h4 class="comment-author">Oliver Colmenares</h4>--}}
{{--                                    <span>18 Sep 2017</span>--}}
{{--                                    <p>--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque--}}
{{--                                        ipsam temporibus maiores--}}
{{--                                        quae.--}}
{{--                                    </p>--}}
{{--                                    <a href="3">Reply</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="comment-avatar">--}}
{{--                                    <img src="assets/img/testimonial-2.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="comment-details">--}}
{{--                                    <h4 class="comment-author">Oliver Colmenares</h4>--}}
{{--                                    <span>18 Sep 2017</span>--}}
{{--                                    <p>--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque--}}
{{--                                        ipsam temporibus maiores--}}
{{--                                        quae natus libero optio.--}}
{{--                                    </p>--}}
{{--                                    <a href="3">Reply</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="form-comments">--}}
{{--                        <div class="title-box-2">--}}
{{--                            <h3 class="title-left">--}}
{{--                                Leave a Reply--}}
{{--                            </h3>--}}
{{--                        </div>--}}
{{--                        <form class="form-mf">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6 mb-3">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" class="form-control input-mf" id="inputName" placeholder="Name *" required>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 mb-3">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="email" class="form-control input-mf" id="inputEmail1" placeholder="Email *" required>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12 mb-3">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="url" class="form-control input-mf" id="inputUrl" placeholder="Website">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12 mb-3">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <button type="submit" class="button button-a button-big button-rouded">Send Message</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                </div>
                <div class="col-md-4">
                    <div class="widget-sidebar sidebar-search">
                        <h5 class="sidebar-title">Search</h5>
                        <div class="sidebar-content">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                                    <span class="input-group-btn">
                      <button class="btn btn-secondary btn-search" type="button">
                        <span class="bi bi-search"></span>
                      </button>
                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
{{--                    <div class="widget-sidebar">--}}
{{--                        <h5 class="sidebar-title">Recent Post</h5>--}}
{{--                        <div class="sidebar-content">--}}
{{--                            <ul class="list-sidebar">--}}
{{--                                <li>--}}
{{--                                    <a href="#">Atque placeat maiores.</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Nam quo autem exercitationem.</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Atque placeat maiores nam quo autem</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Nam quo autem exercitationem.</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="widget-sidebar">--}}
{{--                        <h5 class="sidebar-title">Archives</h5>--}}
{{--                        <div class="sidebar-content">--}}
{{--                            <ul class="list-sidebar">--}}
{{--                                <li>--}}
{{--                                    <a href="#">September, 2017.</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">April, 2017.</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Nam quo autem exercitationem.</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Atque placeat maiores nam quo autem</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Nam quo autem exercitationem.</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="widget-sidebar widget-tags">--}}
{{--                        <h5 class="sidebar-title">Tags</h5>--}}
{{--                        <div class="sidebar-content">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Web.</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Design.</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Travel.</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Photoshop</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Corel Draw</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">JavaScript</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright-box">
                    <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                    <div class="credits">
                        <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                      -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End  Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('Website/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('Website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Website/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('Website/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('Website/assets/vendor/typed.js/typed.umd.js')}}"></script>
<script src="{{asset('Website/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('Website/assets/js/main.js')}}"></script>


</body>

</html>
