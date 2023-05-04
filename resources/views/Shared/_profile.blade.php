<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>User-Profile</title>
</head>

<body style="background-color:#4CAF50">

   
    <section style="margin-top: 8%;" class="container">

    <div style="width: 100%;" class="d-flex ">
<img src="https://blog.rootsofcompassion.org/wp-content/uploads/vegan_banner.jpg" style="width: 100%; height:150px; object-fit: fill;" class="rounded-lg mb-2">
</div>

        <div class="row h-50">
            <div class="col-md-4 ">
                <div class="card ">
                    <div class="text-center card-header">
                        <h1>Kullanici Bilgileri</h1>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex flex-column justify-content-center align-items-center">
                            <li class="w-50"><a class="btn btn-primary mt-3 w-100 " href="{{route('useradress')}}">Adreslerim</a> </li>
                            <li class="w-50"><a class="btn btn-primary mt-3 w-100" href="{{route('shopTrack')}}">Siparişlerim</a> </li>
                            <li class="w-50"><a class="btn btn-primary mt-3 w-100" href="{{route('profileDetails')}}">Hesap Yönetimi</a> </li>
                            <li class="w-50"><a class="btn btn-primary mt-3 w-100" href="{{route('index')}}">Mağaza</a> </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-8 p-3 ">
                <div class="card ">
                    @yield('menubar')
                </div>
            </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>