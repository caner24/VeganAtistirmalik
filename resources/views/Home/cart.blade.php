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
    <section id="content">

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
                                    <th></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th class="qtycolumn">Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($durumBilgisi == true)
                                    @foreach ($productList as $key => $value)
                                        <tr>
                                            <td><img alt="" class="img-responsive product-thumb"
                                                    src="images/products/product1_thumb.jpg"></td>
                                            <td>
                                                <a
                                                    href="{{ route('urundetay', ['id' => $value[0]->id]) }}">{{ $value[0]->ProductName }}</a>

                                            </td>
                                            <td>$59</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" value="1" min="1"
                                                        step="1">
                                                </div>
                                            </td>
                                            <td>$59</td>

                                            <td>
                                                <form method="POST" action="{{ route('cartRemove') }}">
                                                    @csrf <input type="text" name="prodId" id="prodId" hidden
                                                        value="{{ $value[0]->id }}">
                                                    <button type="submit"><i class="fa fa-times fa-fw"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>

                        </table>

                    </div>

                    <div class="text-right">
                        <a href="#" class="btn btn-default"><i class="fa fa-refresh fa-fw"></i> Update
                            Cart</i></a>
                    </div>

                </div>
                <!-- cart contents end -->


                <!-- cart total start -->
                <div class="col-md-4">
                    <div class="text-left">
                        <h4>CART <b>TOTALS</b></h4>
                    </div>

                    <table class="table">
                        <tr>
                            <th>Cart Subtotal</th>
                            <td>$283</td>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <th>Order Total</th>
                            <td class="ordertotal">$283</td>
                        </tr>
                    </table>

                    <div class="text-right">
                        <a href="#" class="btn btn-primary btn-lg">Proceed to Checkout <i
                                class="fa fa-arrow-circle-right fa-fw"></i></a>
                    </div>

                </div>
            </div>
        </section>
    </section>
@endsection
@section('shopping-cart')
    Cart ({{ $cartCount }})
@endsection
