<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VeganAdmin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{route('admin')}}">{{ auth()->user()->name }}</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
                {{ Carbon\Carbon::now()->toDateTimeString() }} &nbsp;
                <a href="{{ route('urungetir') }}" class="btn btn-success square-btn-adjust">Mağaza</a>
                <a href="{{ route('logout') }}" class="btn btn-danger square-btn-adjust">Logout</a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>
                    <li>
                        <a id="dashboard" href="{{ route('admin') }}"><i class="fa fa-dashboard fa-3x"></i>Dashboard</a>
                    </li>
                    <li>
                        <a id="ürünyönetim" href="{{ route('urunyönetim') }}"><i class="fa fa-edit fa-3x"></i> Ürün Ekle
                        </a>
                    </li>
                    <li>
                        <a id="userManagement" href="{{ route('userlist') }}"><i class="fa fa-user fa-3x"></i>Kullanici
                            Yönetimi</a>
                    </li>
                    <li>
                        <a id="productManagement" href="{{ route('urunstok') }}"><i class="fa fa-table fa-3x"></i>Ürün
                            Stok
                            Yönetimi</a>
                    </li>
                    <li>
                        <a id="commentManagement" href="{{ route('getComment') }}"><i class="fa fa-comment fa-3x"></i>Yorumlar</a>
                    </li>
                    <li>
                        <a id="addBanner" href="{{ route('addBanners') }}"><i class="fa fa-upload fa-3x"></i>Banner</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        @yield('content')
        <!-- /. PAGE WRAPPER  -->
    </div>
    <script></script>
    @yield('scripts');
    <script src="/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="/assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="/assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="/assets/js/custom.js"></script>
</body>

</html>