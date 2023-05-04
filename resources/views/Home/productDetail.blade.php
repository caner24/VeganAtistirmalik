@extends('Shared._layout')

@section('menubar')
<!-- PAGE TITLE START -->
<section id="title" class="container-fluid wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Product <small>Details</small></h1>
            </div>
            <div class="col-xs-6 text-right breadcrumbs">
                <ul class="list-inline list-unstyled">
                    <li><a href="index-2.html">Home</a></li>
                    <li>/</li>
                    <li>Product</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- PAGE TITLE END -->


<!-- CONTENT START -->
<section id="content">

    <!-- shop section start -->
    <section id="shop" class="container">

        <!-- row start -->
        <div class="row">

            <!-- main column start -->
            <div class="col-md-12">

                <div class="row">


                    <!-- product page top info start -->
                    <div class="col-md-12 product">
                        <div class="row">
                            @foreach ($products as $key => $value)
                            <div class="col-md-6">

                                <div id="product-gallery" class="owl-carousel">

                                    <div>
                                        <img alt="" class="img-responsive" src="images/{{ $imagess[$key]->Path }}">
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="padding15">
                                    <h2 class="product-title"><b>{{ $value->ProductName }}</b></h2>

                                    <p class="product-price">{{ $productdet[$key]->UnitPrice }}₺</p>
                                </div>
                                <p><b>%100 VEGAN<b></p>



                                <div class="padding15">

                                    <form method="POST" action="{{ route('addcart') }}">
                                        @csrf
                                        <input type="text" name="prodId" id="prodId" hidden value="{{ $value->id }}">
                                        <div class="form-group qty">
                                            <div class="input-group">
                                                <span class="input-group-addon">Qty</span>
                                                <input name="count" type="number" size="4" class="form-control" value="1" min="1" step="1">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus fa-fw"></i>Sepete Ekle</button>
                                    </form>

                                </div>

                                <p><b>Kategori:</b> <a href="#">{{ $productCategory[0]->Name }}</a></p>

                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- product page top info end -->



                    <!-- product page middle info start -->
                    <div class="col-md-12 padding25">


                        <ul class="nav nav-tabs">
             
                            <li><a data-toggle="tab" href="#reviews">Yorumlar</a></li>
                        </ul>


                        <div class="tab-content">

                            <!-- description tab start -->
   

                            <!-- reviews tab start -->
                            <div id="reviews" class="tab-pane fade">

                                <div class="reviews-list">
                                    @foreach ($reviews as $key => $value)
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img alt="" class="img-circle avatar" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png">
                                        </a>
                                        <div class="media-body">
                                            <p class="pull-right"><small><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></small>
                                            </p>

                                            <h4 class="media-heading">{{ $userList[$key] }}</h4>
                                            {{ $value->CommentText }}
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                                <div class="page-header">
                                    <h4>YORUM <b>EKLE</b></h4>
                                </div>
                                @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $hatalar)
                                    <li>{{ $hatalar }}</li>

                                </ul>
                                @endforeach
                                @endif

                                @if (auth()->user())

                                @if($yetkiKontrol==true)
                                <form method="POST" action="{{ route('setComment') }}">
                                    @csrf
                                    <div class="row">

                                        <input type="text" hidden name="productId" value="{{ $productId }}">
                                        <input type="text" hidden name="userId" value="{{ auth()->user()->id }}">
                                        <div class="form-group col-xs-6">
                                            <input type="text" name="userName" class="form-control input-lg" placeholder="Name*" value="{{ auth()->user()->name }}" disabled>
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <input type="email" class="form-control input-lg" placeholder="Email*" value="{{ auth()->user()->email }}" disabled>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <textarea class="form-control" rows="6" name="commentText" placeholder="Yazilacak Metin*" required></textarea>
                                        </div>

                                        <div class="form-group col-xs-12 text-right">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-check fa-fw"></i> Gönder</button>
                                        </div>

                                    </div>
                                </form>
                                @else
                                <p class="text-muted">Yorum yapmak için ÜRÜNÜ <b>SATIN ALMIŞ</b> olmanız gerekmektedir..</p>
                                @endif
                                @else
                                <p class="text-muted">Yorum yapmak için giriş yapmaniz gerekmektedir.</p>
                                @endif

                            </div>
                            <!-- reviews tab end -->

                        </div>

                    </div>
                    <!-- product page middle info end -->


                    <!-- related products start -->
                    <div class="col-md-12">

                        <div class="text-center">
                            <h3>SON EKLENEN <b>ÜRÜNLER</b></h3>
                        </div>

                        <div id="products-carousel" class="owl-carousel">

                            @foreach ($releatedProduct as $key => $value)
                            <div>
                                <div class="text-center product-item">
                                    <div class="product-item-top">
                                        <img alt="" class="img-responsive" src="images/{{ $releatedImage[$key]->Path }}">
                                        <div class="mask"></div>
                                        <ul class="list-unstyled list-inline">
                                            <li><a href="{{ route('urundetay', ['id' => $value->id]) }}"><i class="fa fa-link fa-fw"></i></a></li>
                                            <li>
                                                <form method="POST" action="{{ route('addcart') }}">
                                                    @csrf <input type="text" name="prodId" id="prodId" hidden value="{{ $value->id }}">
                                                    <button type="submit"><i class="fa fa-cart-plus fa-fw"></i></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item-inner">
                                        <h3 class="product-title"><a href="#">{{ $value->ProductName }}</a>
                                        </h3>
                                        <p class="product-price">{{ $releatedProductdet[$key]->UnitPrice }}₺</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <!-- carousel end -->

                    </div>
                    <!-- related products end -->

                </div>
                <!-- row end -->

            </div>
            <!-- main column end -->


        </div>
        <!-- row end -->

    </section>
    <!-- shop section end -->

</section>
@endsection
@section('shopping-cart')
Cart ({{ $cartCount }})
@endsection