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
                                                <img alt="" class="img-responsive"
                                                    src="images/{{ $imagess[$key]->Path }}">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="padding15">
                                            <h2 class="product-title"><b>{{ $value->ProductName }}</b></h2>
                                            <p>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                                3 Reviews
                                            </p>
                                            <p class="product-price">{{ $productdet[$key]->UnitPrice }}</p>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget
                                            leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis
                                            vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Maecenas vitae vehicula enim. Sed quis ante quis eros maximus dignissim
                                            a eu mi. Proin varius arcu metus.</p>



                                        <div class="padding15">

                                            <form  method="POST" action="{{ route('addcart') }}">
                                                @csrf
                                                <input type="text" name="prodId" id="prodId" hidden
                                                    value="{{ $value->id }}">
                                                <div class="form-group qty">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Qty</span>
                                                        <input type="number" size="4" class="form-control"
                                                            value="1" min="1" step="1">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fa fa-cart-plus fa-fw"></i> Add to cart</button>
                                            </form>

                                        </div>

                                        <p><b>Category:</b> <a href="#">Computers</a></p>

                                    </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- product page top info end -->



                        <!-- product page middle info start -->
                        <div class="col-md-12 padding25">


                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
                                <li><a data-toggle="tab" href="#spec">Specifications</a></li>
                                <li><a data-toggle="tab" href="#reviews">Reviews (3)</a></li>
                            </ul>


                            <div class="tab-content">

                                <!-- description tab start -->
                                <div id="description" class="tab-pane fade in active">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo
                                        at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at
                                        risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        vitae vehicula enim. Sed quis ante quis eros maximus dignissim a eu mi.
                                        Proin varius arcu metus.</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Duis a hendrerit risus. In non tristique libero.
                                        Pellentesque elementum justo at diam feugiat lobortis.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo
                                        at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at
                                        risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        vitae vehicula enim. Sed quis ante quis eros maximus dignissim a eu mi.
                                        Proin varius arcu metus.</p>
                                </div>
                                <!-- description tab end -->

                                <!-- Specifications tab start -->
                                <div id="spec" class="tab-pane fade">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <tr>
                                                <td><b>Display</b></td>
                                                <td>15.6"</td>
                                            </tr>
                                            <tr>
                                                <td><b>Processor</b></td>
                                                <td>Intel i7</td>
                                            </tr>
                                            <tr>
                                                <td><b>RAM Memory</b></td>
                                                <td>8 GB</td>
                                            </tr>
                                            <tr>
                                                <td><b>Hard Disk</b></td>
                                                <td>1 TB</td>
                                            </tr>
                                            <tr>
                                                <td><b>Color</b></td>
                                                <td>Black</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <!-- Specifications tab end -->

                                <!-- reviews tab start -->
                                <div id="reviews" class="tab-pane fade">

                                    <div class="reviews-list">

                                        <div class="media">

                                            <a class="media-left" href="#">
                                                <img alt="" class="img-circle avatar"
                                                    src="images/team/thumb8_40.jpg">
                                            </a>
                                            <div class="media-body">
                                                <p class="pull-right"><small><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i></small></p>
                                                <h4 class="media-heading">John Doe <small>2 days ago</small></h4>
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                dolores et quas molestias excepturi sint occaecati cupiditate non
                                                provident, similique sunt in culpa qui officia deserunt mollitia
                                                animi, id est laborum et dolorum fuga.
                                            </div>
                                        </div>

                                        <div class="media">

                                            <a class="media-left" href="#">
                                                <img alt="" class="img-circle avatar"
                                                    src="images/team/thumb5_40.jpg">
                                            </a>
                                            <div class="media-body">
                                                <p class="pull-right"><small><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i></small></p>
                                                <h4 class="media-heading">Sarah Smith<small>4 days ago</small></h4>
                                                Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus
                                                sem magna, maximus at est id, maximus aliquet nunc. Suspendisse
                                                lacinia velit a eros porttitor, in interdum ante faucibus.
                                            </div>
                                        </div>

                                        <div class="media">

                                            <a class="media-left" href="#">
                                                <img alt="" class="img-circle avatar"
                                                    src="images/team/thumb3_40.jpg">
                                            </a>
                                            <div class="media-body">
                                                <p class="pull-right"><small><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i></small></p>
                                                <h4 class="media-heading">Jane Doe<small>5 days ago</small></h4>
                                                Temporibus autem quibusdam et aut officiis debitis aut rerum
                                                necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                                molestiae non recusandae.
                                            </div>
                                        </div>

                                    </div>

                                    <div class="page-header">
                                        <h4>ADD A <b>REVIEW</b></h4>
                                    </div>

                                    <p class="text-muted">You must be logged in to add a review.</p>

                                    <form>
                                        <div class="row">
                                            <div class="form-group col-xs-6">
                                                <input type="text" class="form-control input-lg" placeholder="Name*"
                                                    required>
                                            </div>
                                            <div class="form-group col-xs-6">
                                                <input type="email" class="form-control input-lg" placeholder="Email*"
                                                    required>
                                            </div>

                                            <div class="form-group col-xs-12">
                                                <textarea class="form-control" rows="6" placeholder="Review*" required></textarea>
                                            </div>

                                            <div class="form-group col-xs-12 text-right">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fa fa-check fa-fw"></i> SUBMIT REVIEW</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <!-- reviews tab end -->

                            </div>

                        </div>
                        <!-- product page middle info end -->


                        <!-- related products start -->
                        <div class="col-md-12">

                            <div class="text-center">
                                <h3>RELATED <b>PRODUCTS</b></h3>
                            </div>

                            <div id="products-carousel" class="owl-carousel">

                                <div>
                                    <div class="text-center product-item">
                                        <div class="product-item-top">
                                            <img alt="" class="img-responsive"
                                                src="images/products/product1_thumb.jpg">
                                            <div class="mask"></div>
                                            <ul class="list-unstyled list-inline">
                                                <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-plus fa-fw"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-item-inner">
                                            <h3 class="product-title"><a href="#">Photo Camera</a></h3>
                                            <p class="product-price">$129</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="text-center product-item">
                                        <div class="product-item-top">
                                            <img alt="" class="img-responsive"
                                                src="images/products/product3_thumb.jpg">
                                            <div class="mask"></div>
                                            <ul class="list-unstyled list-inline">
                                                <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-plus fa-fw"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-item-inner">
                                            <h3 class="product-title"><a href="#">Sofa</a></h3>
                                            <p class="product-price">$519</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="text-center product-item">
                                        <div class="product-item-top">
                                            <img alt="" class="img-responsive"
                                                src="images/products/product4_thumb.jpg">
                                            <div class="mask"></div>
                                            <ul class="list-unstyled list-inline">
                                                <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-plus fa-fw"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-item-inner">
                                            <h3 class="product-title"><a href="#">Hand Bag</a></h3>
                                            <p class="product-price">$99</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="text-center product-item">
                                        <div class="product-item-top">
                                            <img alt="" class="img-responsive"
                                                src="images/products/product1_thumb.jpg">
                                            <div class="mask"></div>
                                            <ul class="list-unstyled list-inline">
                                                <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-plus fa-fw"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-item-inner">
                                            <h3 class="product-title"><a href="#">Photo Camera</a></h3>
                                            <p class="product-price">$29</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="text-center product-item">
                                        <div class="product-item-top">
                                            <img alt="" class="img-responsive"
                                                src="images/products/product2_thumb.jpg">
                                            <div class="mask"></div>
                                            <ul class="list-unstyled list-inline">
                                                <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-plus fa-fw"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-item-inner">
                                            <h3 class="product-title"><a href="#">Wood Chair</a></h3>
                                            <p class="product-price">$29</p>
                                        </div>
                                    </div>
                                </div>

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
