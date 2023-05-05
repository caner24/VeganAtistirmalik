@extends('Shared._layout')
@section('menubar')
<section id="title" class="container-fluid wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Shop <small>Catalog</small></h1>
            </div>
            <div class="col-xs-6 text-right breadcrumbs">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>/</li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- PAGE TITLE END -->


<!-- CONTENT START -->
<section id="content">

    <section id="shop" class="container">

        <div class="row">

            <!-- sidebar start -->
            <div id="sidebar" class="col-md-3">

                <div class="widget">

                </div>


                <div class="widget">
                    <h4>KATEGORİLER</h4>
                    <ul class="list-unstyled link-list">
                        @foreach ($categories as $key => $value)
                        <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> <a href="{{ route('urungetir', ['category' => $categories[$key]->id]) }}">{{ $categories[$key]->Name }}
                                <span class="pull-right"></span></a></li>
                        @endforeach
                    </ul>
                </div>



            </div>
            <!-- sidebar end -->

            <!-- right column start -->
            <div class="col-md-9">

                <div class="row">

                    <div class="col-md-12 wow fadeIn">
                        <div class="row product-results">
                            <div class="product-results">



                                <div class="col-xs-4 text-right">

                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($durumBilgisi == true)
                    @foreach ($products as $key => $value)
                    <div class="col-md-4 wow fadeInUp">
                        <div class="text-center product-item">
                            <div class="product-item-top">

                                <img alt="" class="img-responsive" src="/images/{{ $imagess[$key][0]->Path }}">
                                <div class="mask"></div>
                                <ul class="list-unstyled list-inline">

                                    @if($products[$key][0]->isStock==1)
                                    <li>
                                        <h2 style="color:white">ÜRÜN GEÇİÇİ OLARAK STOKTAN ÇEKİLMİŞTİR </h2>
                                    </li>

                                    @else
                                    <li><a href="{{ route('urundetay', ['id' => $products[$key][0]->id]) }}"><i class="fa fa-link fa-fw"></i></a></li>
                                    <li>
                                        <form method="POST" action="{{ route('addcart') }}">
                                            @csrf <input type="text" name="prodId" id="prodId" hidden value="{{ $products[$key][0]->id }}">
                                            <input type="text" name="count" id="count" hidden value="1">
                                            <button type="submit"><i class="fa fa-cart-plus fa-fw"></i></button>
                                        </form>
                                    </li>
                                    @endif

                                </ul>
                            </div>
                            <div class="product-item-inner">
                                @if($products[$key][0]->isStock!=1)
                                <h3 class="product-title"><a href="{{ route('urundetay', ['id' => $products[$key][0]->id]) }}">{{ $products[$key][0]->ProductName }}</a></h3>
                                @else
                                <h3 class="product-title"><a>{{ $products[$key][0]->ProductName }}</a></h3>
                                @endif
                                <p class="product-price">{{ $productdet[$key]->UnitPrice }} ₺</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    @foreach ($products as $key => $value)
                    <div class="col-md-4 wow fadeInUp">
                        <div class="text-center product-item">
                            <div class="product-item-top">
                                <img alt="" class="img-responsive" src="/images/{{ $imagess[$key]->Path }}">
                                <div class="mask"></div>
                                <ul class="list-unstyled list-inline">
                                    @if($value->isStock==1)
                                    <li>
                                        <h2 style="color:white">ÜRÜN GEÇİÇİ OLARAK STOKTAN ÇEKİLMİŞTİR </h2>
                                    </li>

                                    @else
                                    <li><a href="{{ route('urundetay', ['id' => $value->id]) }}"><i class="fa fa-link fa-fw"></i></a></li>
                                    <li>
                                        <form method="POST" action="{{ route('addcart') }}">
                                            @csrf <input type="text" name="prodId" id="prodId" hidden value="{{ $value->id }}">
                                            <input type="text" name="prodDetId" id="prodDetId" hidden value="{{ $productdet[$key]->id }}">
                                            <input name="count" type="number" size="4" value="1" min="1" step="1" hidden>
                                            <button type="submit"><i class="fa fa-cart-plus fa-fw"></i></button>
                                        </form>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="product-item-inner">
                                @if($value->isStock!=1)
                                <h3 class="product-title"><a href="{{ route('urundetay', ['id' => $value->id]) }}">{{ $value->ProductName }}</a>
                                </h3>
                                @else
                                <h3 class="product-title"><a>{{ $value->ProductName }}</a>
                                </h3>
                                @endif
                                <p class="product-price">{{ $productdet[$key]->UnitPrice }} ₺</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="col-md-12 wow fadeIn">
                        <div id="pagination" class="row text-center">
                            <nav aria-label="Page navigation">
                                <ul id="numberSection" class="pagination">
                                    <li class="disabled">
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="{{ route('urungetir') }}">1</a></li>
                                    @foreach ($allproductList as $key => $value)
                                    @if ($key > 0)
                                    @if ($key % 6 == 0)
                                    {{ $sayac++ }}
                                    @if ($sayac > 2)
                                    @if($sayac==2)
                                    <li><a href="{{ route('urungetir', ['id' => 6 ]) }}">{{ $sayac }}</a>
                                    </li>
                                    @else
                                    <li><a href="{{ route('urungetir', ['id' => 6 * $sayac]) }}">{{ $sayac }}</a>
                                    </li>
                                    @endif
                                    @else
                                    <li><a href="{{ route('urungetir', ['id' => 6]) }}">{{ $sayac }}</a>
                                    </li>
                                    @endif
                                    @endif
                                    @endif
                                    @endforeach

                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
@section('shopping-cart')
Cart ({{ $cartCount }})
@endsection
@section('scripts')
@endsection