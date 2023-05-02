<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.codeniner.com/edura/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jul 2017 15:05:39 GMT -->

<head>
    <!-- METAS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- TITLE -->
    <title>VeganAtistirmalik</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- LOAD MAIN CSS -->
    <link href="/style.css" rel="stylesheet" type="text/css">

    <!-- LOAD COLOR STYLE (OPTONAL) CSS -->
    <link href="/styles/lunar.css" rel="stylesheet" type="text/css" id="colorstyle">

    <!-- LOAD CUSTOM CSS -->
    <link href="/custom.css" rel="stylesheet" type="text/css">

    <!-- LOAD DEMO CSS -->
    <link href="/demo/demo.css" rel="stylesheet" type="text/css">
    

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <i class="fa fa-spinner fa-spin preloader-animation" aria-hidden="true"></i>
    </div>
    <!-- Preloader End -->

    <!-- WRAPPER START -->
    <div id="wrapper">
        <!-- HEADER START -->
        <section id="header">
            <!-- Fixed navbar -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="images/edura-logo.png" alt="Edura - Multipurpose Website Template">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="{{ route('index') }}" class="dropdown-toggle">Anasayfa</a>

                            </li>

                            <li class="dropdown">
                                <a href="{{ route('urungetir') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ürünler</a>
                            </li>

                            <li class="dropdown">
                                <a href="{{ route('about') }}" class="dropdown-toggle">Hakkimizda</a>
                            </li>

                            @if (auth()->check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('useradress')}}">Profilim</a></li>
                                    <li><a href="{{ route('logout') }}">Cikis Yap</a></li>
                                </ul>
                            </li>
                            @if (auth()->user()->isAdmin==1)
                            <li class="dropdown">
                                <a href="{{ route('admin') }}" class="dropdown-toggle">admin</a>
                            </li>
                            @endif
                            @else{
                            <li class="dropdown">
                                <a href="{{ route('login') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Giriş Yap</a>
                            </li>
                            }
                            @endif
                            <li class="dropdown">
                                <a href="{{ route('showCart') }}" style="display: flex"><i class="fa fa-shopping-cart fa-fw"></i>@yield('shopping-cart')</a>
                            </li>
                        </ul>



                    </div>
                    <!--/.nav-collapse -->
                </div>
            </nav>
        </section>


        @yield('menubar');

        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/edura-logo.png" alt="Edura - Multipurpose Website Template">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.
                            Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis
                            sagittis ipsum. Praesent mauris. <b>Lorem ipsum dolor sit amet, consectetur adipiscing</b>.
                        </p>
                        <br>
                        <ul class="list-unstyled list-inline social-icons">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter twitter"></i></a></li>
                            <li><a href="#" class="googleplus"><i class="fa fa-google-plus googleplus"></i></a>
                            </li>
                            <li><a href="#" class="youtube"><i class="fa fa-youtube youtube"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>PAGES</h4>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i> <a href="#">ANASAYFA</a>
                            </li>
                            <li><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i> <a href="#">ÜRÜNLER</a></li>

                            <li><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i> <a href="#">HAKKIMIZDA</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h4>CONTACT US</h4>
                        <p><i class="fa fa-map-pin fa-fw"></i> 379 5th Ave, New York, 10001, USA</p>
                        <p><i class="fa fa-phone fa-fw"></i> +(112) 345 6879</p>
                        <p><i class="fa fa-phone fa-fw"></i> +(112) 345 6879</p>
                        <p><i class="fa fa-envelope fa-fw"></i> hello@example.com</p>
                    </div>


                </div>


            </div>
        </section>
        <!-- FOOTER END -->


    </div>
    <!-- WRAPPER END -->

    <!-- back to top button -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>



    <!-- MAIN JS FILES REQUIRED ON ALL PAGES -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
    <script src="/vendor/wow/wow.min.js"></script>
    <script src="/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/vendor/SmoothScroll/SmoothScroll.min.js"></script>

    <script src="/vendor/waypoints/waypoints.min.js"></script>
    <script src="/vendor/counterup/jquery.counterup.min.js"></script>


    <!-- HERO SLIDER-->
    <script src="/vendor/hero-slider/js/modernizr.js"></script>
    <script src="/vendor/hero-slider/js/main.js"></script>

    <!-- OWL CAROUSEL -->
    <script src="/vendor/owl-carousel/owl.carousel.js"></script>

    <!-- FILTERIZR -->
    <script src="/vendor/jquery/jquery.filterizr.js"></script>

    <!-- EDURA JS REQUIRED ON ALL PAGES-->
    <script src="edura.js"></script>

    <script src="demo/demo.js"></script>
</body>


</html>