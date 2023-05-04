@extends('Shared._layout')
@section('menubar')
<section id="title" class="container-fluid wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Alışveriş Sepeti</h1>
            </div>
            <div class="col-xs-6 text-right breadcrumbs">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>/</li>
                    <li><a href="{{route('urungetir')}}">Shop</a></li>
                    <li>/</li>
                    <li>Alışveriş Sepeti</li>
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
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Ürün Resmi</th>
                                <th>Ürün Adı</th>
                                <th>Fiyatı</th>
                                <th class="qtycolumn">Adet</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($durumBilgisi == true)
                            @foreach ($productList as $key => $value)
                            <tr>
                                <td><img alt="" class="img-responsive product-thumb" src="images/{{ $photoPathList[$key] }}">
                                </td>
                                <td>
                                    <a href="{{ route('urundetay', ['id' => $value[0]->id]) }}">{{ $value[0]->ProductName }}</a>

                                </td>
                                <td>{{ $productDetList[$key] }}</td>

                                @if ($productCount[$key])
                                <td>
                                    <div class="form-group">
                                        <input disabled type="number" class="form-control" value="{{ $productCount[$key] }}" min="1" step="1">
                                    </div>
                                </td>
                                <td>{{ $productDetList[$key] * $productCount[$key] }}</td>
                                @else
                                <td>
                                    <div class="form-group">
                                        <input disabled type="number" class="form-control" value="1" min="1" step="1">
                                    </div>
                                </td>
                                <td>{{ $productDetList[$key] }}</td>
                                @endif


                                <td>
                                    <form method="POST" action="{{ route('cartRemove') }}">
                                        @csrf 
                                        <input type="text" name="prodId" id="prodId" hidden value="{{ $value[0]->id }}">
                                        <input type="text" name="productDetailId" id="productDetailId" hidden value="{{ $productDetId[0] }}">
                                        <input type="text" name="productPrice" id="productPrice" hidden value="{{ $detArr[0] }}">
                                        <button type="submit"><i class="fa fa-times fa-fw"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
            @foreach ($productList as $key => $value)
            @if ($key == $cartCount - 1)
            <div class="col-md-4">
                <div class="text-left">
                    <h4>CART <b>TOTALS</b></h4>
                </div>

                <table class="table">
                    <tr>
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
                    @if(auth()->user())
                    <a href="{{route('createShop')}}" class="btn btn-primary btn-lg">Satın Al <i class="fa fa-arrow-circle-right fa-fw"></i></a>

                    @else
                    <b>Satın almak için giriş yapmanız gerekmektedir.</b>
                    <a disabled class="btn btn-primary btn-lg">Satın Al <i class="fa fa-arrow-circle-right fa-fw"></i></a>
                    @endif

                </div>

            </div>
            @endif
            @endforeach
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
        </div>
    </section>
</section>
@endsection
@section('shopping-cart')
Cart ({{ $cartCount }})
@endsection