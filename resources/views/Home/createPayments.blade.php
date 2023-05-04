@extends('Shared._layout')
@section('menubar')
<section id="title" class="container-fluid wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Shopping Cart</h1>
            </div>
            <div class="col-xs-6 text-right breadcrumbs">
                <ul class="list-inline list-unstyled">
                    <li><a href="index-2.html">Home</a></li>
                    <li>/</li>
                    <li><a href="#">Shop</a></li>
                    <li>/</li>
                    <li>Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- PAGE TITLE END -->


<!-- CONTENT START -->
<section id="content" style="height: 60%;">

    <!-- shop section start -->
    <section id="cart" class="container">

        <!-- row start -->
        <div class="row">

            <!-- cart contents start -->
            <div class="col-md-12">

                @if($userAdress->count()>0)

                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>İl</th>
                                <th>İlçe</th>
                                <th>Adress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($userAdress as $key=>$value)

                                <td>{{$value->Region}}</td>
                                <td>{{$value->Province}}</td>
                                <td>{{$value->AdressText}}</td>
                                @endforeach
                            </tr>
                        </tbody>


                        <div style="display:flex;flex-direction:column">
                            <form method="get" action="{{route('setFieche')}}">
                                <label>Ad Soyad</label>

                                <input required type="text">
                                <label>Kart Numarası</label>
                                <input required type="text">
                                <div style="display:flex;">
                                    <div style="display:flex;flex-direction:column">
                                        <label>Geçerlilik (mm/yy)</label>
                                        <input required type="text">
                                    </div>
                                    <div style="display:flex;flex-direction:column">
                                        <label>Güvenlik Kodu</label>
                                        <input required type="text">
                                    </div>
                                </div>


                                <br>
                                <br>
                                <a href="{{route('setAdress')}}" class="btn btn-success">Yeni Adres Ekle</a>
                                <br>
                        </div>
                </div>
            </div>
            @foreach ($productList as $key => $value)
            @if ($key == $cartCount - 1)

            <div class="col-md-4">

                <table class="table">
                    <tr>
                        <br>
                        <th>Toplam Tutar</th>
                        <td>{{ $total }}</td>
                    </tr>
                    <tr>
                        <th>Kargo</th>
                        <td>Ücretsiz</td>
                    </tr>
                    <tr>
                        <th>Order Total</th>
                        <td class="ordertotal">{{ $total }}</td>
                    </tr>
                </table>

                <div class="text-right">
                    <input type="submit" class="btn btn-primary btn-lg" value="Sipariş Oluştur" />
                </div>
                </form>
            </div>


            @else
            <div class="col-md-4">
                <div class="text-left">
                    <h4>CART <b>TOTALS</b></h4>
                </div>

                <table class="table">
                    <tr>
                        <th>Toplam Tutar</th>
                        <td>0₺</td>
                    </tr>
                    <tr>
                        <th>Kargo</th>
                        <td>Ücretsiz</td>
                    </tr>
                    <tr>
                        <th>Order Total</th>
                        <td class="ordertotal">0₺</td>
                    </tr>
                </table>

                <div class="text-right">
                    <a href="#" class="btn btn-primary btn-lg">Alışverişi Tamamla <i class="fa fa-arrow-circle-right fa-fw"></i></a>
                </div>

            </div>
            @endif
            @endforeach
            @else
            <div class="table-responsive">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>İl</th>
                            <th>İlçe</th>
                            <th>Adress</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($userAdress as $key=>$value)
                            <td>{{$value->Region}}</td>
                            <td>{{$value->Province}}</td>
                            <td>{{$value->AdressText}}</td>
                            @endforeach
                        </tr>
                    </tbody>


                    <div style="display:flex;flex-direction:column">
                        <form method="post">
                            <label>Ad Soyad</label>

                            <input type="text">
                            <label>Kart Numarası</label>
                            <input type="text">
                            <div style="display:flex;">
                                <div style="display:flex;flex-direction:column">
                                    <label>Geçerlilik (mm/yy)</label>
                                    <input type="text">
                                </div>
                                <div style="display:flex;flex-direction:column">
                                    <label>Güvenlik Kodu</label>
                                    <input type="text">
                                </div>
                            </div>
                        </form>

                        <br>
                        <br>
                        <a href="{{route('setAdress')}}" class="btn btn-success">Yeni Adres Ekle</a>
                        <br>
                    </div>
            </div>
        </div>
        @foreach ($productList as $key => $value)
        @if ($key == $cartCount - 1)

        <div class="col-md-4">

            <table class="table">
                <tr>
                    <br>
                    <th>Toplam Tutar</th>
                    <td>{{ $total }}</td>
                </tr>
                <tr>
                    <th>Kargo</th>
                    <td>Ücretsiz</td>
                </tr>
                <tr>
                    <th>Order Total</th>
                    <td class="ordertotal">{{ $total }}</td>
                </tr>
            </table>

            <div class="text-right">
                <a href="#" disabled class="btn btn-primary btn-lg">Sipariş Oluştur <i class="fa fa-arrow-circle-right fa-fw"></i></a>
            </div>

        </div>


        @else
        <div class="col-md-4">
            <div class="text-left">
                <h4>CART <b>TOTALS</b></h4>
            </div>

            <table class="table">
                <tr>
                    <th>Toplam Tutar</th>
                    <td>0₺</td>
                </tr>
                <tr>
                    <th>Kargo</th>
                    <td>Ücretsiz</td>
                </tr>
                <tr>
                    <th>Order Total</th>
                    <td class="ordertotal">0₺</td>
                </tr>
            </table>

            <div class="text-right">
                <a href="#" disabled class="btn btn-primary btn-lg">Alışverişi Tamamla <i class="fa fa-arrow-circle-right fa-fw"></i></a>
            </div>

        </div>
        @endif
        @endforeach
        @endif

        </div>
    </section>
</section>
@endsection
@section('shopping-cart')
Cart ({{ $cartCount }})
@endsection