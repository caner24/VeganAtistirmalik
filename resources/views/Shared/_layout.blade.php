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

    <style>
        .cookie {
            z-index: 1;
            width: 420px;
            height: 150px;
            background-color: #fff;
            position: fixed;
            bottom: 88px;
            border-radius: 10px;
            left: 5%;
            padding: 10px 20px;
        }

        .cookie .txt {
            float: left;
            width: 65%;
        }

        .txt p {
            color: #1D2D35;
        }

        .cookie .accept {
            background-color: #40CC79;
            color: #fff !important;
            border-radius: 32px;
            padding: 3px 23px;
            /* align-self: center; */
            font-size: 19px;
            margin-top: 2.5%;
            margin-left: 3%;

        }

        .cookie .accept:hover {
            background-color: #30b867;
        }
    </style>
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
        <div class="d-flex justify-content-center container mt-5">
            <div class="row">
                <div class="col-md-10">
                    <div class="d-flex flex-row justify-content-between align-items-center card cookie p-3">
                        <div class="d-flex flex-row align-items-center"><img src="https://cdn-icons-png.flaticon.com/512/1047/1047711.png" width="40">
                            <div class="ml-2 mr-2"><span>Siteyi daha etkin kullanabilmeniz için çerezleri kullanıyoruz , &nbsp;siteye giriş yaparak bunu kabul etmiş oluyorsunuz<br></span></div>
                        </div>
                        <div><button name="okCokkies" id="okCookies" class="btn btn-dark" type="button">Okay</button></div>
                    </div>
                </div>
            </div>
        </div>

        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/edura-logo.png" alt="Edura - Multipurpose Website Template">
                        <p>Kaliteli ürünlerinden oluşan alternatiflerimizle, Vegan Dünyası olarak, vegan hayat tarzını benimseyen tüm hayvan severlere hizmet etmenin mutluluğunu yaşıyoruz.

                            </b>.
                        </p>
                        <br>
                      
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
                        <p><i class="fa fa-map-pin fa-fw"></i> 379 5th Ave, Türkiye</p>
                        <p><i class="fa fa-phone fa-fw"></i> +(112) 345 6879</p>
                        <p><i class="fa fa-phone fa-fw"></i> +(112) 345 6879</p>
                        <p><i class="fa fa-envelope fa-fw"></i> hello@veganatistirmalik.com</p>
                    </div>


                </div>


            </div>
        </section>
        <!-- FOOTER END -->


    </div>
    <!-- WRAPPER END -->

    <!-- back to top button -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

    <script>
        if (sessionStorage.getItem("okCookies")) {
            document.querySelector(".cookie").classList.add("hidden");
        } else {
            document.getElementById("okCookies").addEventListener('click', function() {
                document.querySelector(".cookie").classList.add("hidden");
                sessionStorage.setItem("okCookies", 1);
            });
        }
    </script>
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