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
                        <li><a href="index-2.html">Home</a></li>
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
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control input-lg" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-lg" type="submit"><i
                                            class="fa fa-search"></i></button>
                                </span>
                            </div>

                        </form>
                    </div>


                    <div class="widget">
                        <h4>CATEGORIES</h4>
                        <ul class="list-unstyled link-list">
                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> <a href="#">Furniture <span
                                        class="pull-right">(5)</span></a></li>
                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> <a href="#">Electronics
                                    <span class="pull-right">(2)</span></a></li>
                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> <a href="#">Books <span
                                        class="pull-right">(1)</span></a></li>
                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> <a href="#">Accessories
                                    <span class="pull-right">(19)</span></a></li>
                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> <a href="#">Computers <span
                                        class="pull-right">(2)</span></a></li>
                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> <a href="#">Cameras <span
                                        class="pull-right">(7)</span></a></li>
                        </ul>
                    </div>

                    <div class="widget">
                        <h4>FEATURED</h4>

                        <div class="products-list">

                            <div class="media">
                                <a class="media-left" href="#">
                                    <img alt="" class="img-responsive product-thumb"
                                        src="images/products/product1_thumb.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="product-title">Photo Camera</a>
                                    <p class="product-price">$153</p>
                                </div>
                            </div>

                            <div class="media">
                                <a class="media-left" href="#">
                                    <img alt="" class="img-responsive product-thumb"
                                        src="images/products/product2_thumb.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="product-title">Wood Chair</a>
                                    <p class="product-price">$99</p>
                                </div>
                            </div>

                            <div class="media">
                                <a class="media-left" href="#">
                                    <img alt="" class="img-responsive product-thumb"
                                        src="images/products/product3_thumb.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="product-title">Comfortable Sofa</a>
                                    <p class="product-price">$526</p>
                                </div>
                            </div>

                            <div class="media">
                                <a class="media-left" href="#">
                                    <img alt="" class="img-responsive product-thumb"
                                        src="images/products/product4_thumb.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="product-title">Hand Bag</a>
                                    <p class="product-price">$125</p>
                                </div>
                            </div>

                            <div class="media">
                                <a class="media-left" href="#">
                                    <img alt="" class="img-responsive product-thumb"
                                        src="images/products/product1_thumb.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="product-title">Photo Camera</a>
                                    <p class="product-price">$29</p>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
                <!-- sidebar end -->

                <!-- right column start -->
                <div class="col-md-9">

                    <div class="row">

                        <div class="col-md-12 wow fadeIn">
                            <div class="row product-results">
                                <div class="product-results">
                                    <div class="col-xs-8">
                                        <p class="woocommerce-result-count">Showing 1–12 of 25 results</p>
                                    </div>

                                    <div class="col-xs-4 text-right">
                                        <form method="get" class="woocommerce-ordering">
                                            <select class="form-control" name="orderby">
                                                <option selected="selected" value="menu_order">Default sorting
                                                </option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="rating">Sort by rating</option>
                                                <option value="date">Newest on top</option>
                                                <option value="price">Price: low to high</option>
                                                <option value="price-desc">Price: high to low</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @foreach ($products as $key => $value)
                            <div class="col-md-4 wow fadeInUp">
                                <div class="text-center product-item">
                                    <div class="product-item-top">
                                        <img alt="" class="img-responsive"
                                            src="/images/{{ $imagess[$key]->Path }}">
                                        <div class="mask"></div>
                                        <ul class="list-unstyled list-inline">
                                            <li><a href="{{ route('urundetay', ['id' => $value->id]) }}"><i
                                                        class="fa fa-link fa-fw"></i></a></li>
                                            <li>
                                                <form method="POST" action="{{ route('addcart') }}">
                                                    @csrf <input type="text" name="prodId" id="prodId" hidden
                                                        value="{{ $value->id }}">
                                                    <button type="submit"><i class="fa fa-cart-plus fa-fw"></i></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item-inner">
                                        <h3 class="product-title"><a href="#">{{ $value->ProductName }}</a></h3>
                                        <p class="product-price">{{ $productdet[$key]->UnitPrice }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-12 wow fadeIn">
                            <div id="pagination" class="row text-center">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="disabled">
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li class="disabled"><a href="#">...</a></li>
                                        <li><a href="#">20</a></li>
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
