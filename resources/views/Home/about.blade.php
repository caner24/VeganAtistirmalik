@extends('Shared._layout')

@section('menubar')
    <section id="title" class="container-fluid wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h1>About Us</h1>
                </div>
                <div class="col-xs-6 text-right breadcrumbs">
                    <ul class="list-inline list-unstyled">
                        <li><a href="index-2.html">Home</a></li>
                        <li>/</li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- PAGE TITLE END -->


    <!-- CONTENT START -->
    <section id="page-content">

        <div id="about-us" class="container padding35">
            <div class="row">
                <div class="col-md-6 text-center wow bounceIn">
                    <img alt="" class="img-circle" src="images/other/corporate.jpg">
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <h2>ABOUT <b>EDURA</b></h2>
                    <p class="lead">We’re help your vulputate bibendum justo sed, tincidunt</p>
                    <div class="space20"></div>
                    <h4 class="text-uppercase text-bold">Why Us?</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed
                        cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                        Praesent mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec tellus sed augue
                        semper porta.</p>
                    <div class="space20"></div>
                    <h4 class="text-uppercase text-bold">What We Do?</h4>
                    <p>Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. <b>Fusce nec tellus sed augue semper
                            porta</b>. Aenean quam. In scelerisque sem at dolor. <b>Mauris massa</b>. Maecenas mattis. Sed
                        convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis
                        vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum.
                        Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum
                        velit. </p>
                </div>
            </div>
        </div>
        <div id="the-team" class="container-fluid bg-gray text-center padding35">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 top">
                        <h2 class="text-uppercase">Meet The <b>Team</b></h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 wow bounceIn">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="images/team/thumb6.jpg" alt="" class="img-circle">
                                <div class="mask"></div>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-facebook fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope fw"></i></a></li>
                                </ul>
                            </div>
                            <h4>John Smith</h4>
                            <small>Chief Executive Officer</small>
                        </div>
                    </div>
                    <div class="col-md-3 wow bounceIn">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="images/team/thumb7.jpg" alt="" class="img-circle">
                                <div class="mask"></div>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-facebook fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope fw"></i></a></li>
                                </ul>
                            </div>
                            <h4>Ryan Doe</h4>
                            <small>PHP Programmer</small>
                        </div>
                    </div>
                    <div class="col-md-3 wow bounceIn">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="images/team/thumb8.jpg" alt="" class="img-circle">
                                <div class="mask"></div>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-facebook fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope fw"></i></a></li>
                                </ul>
                            </div>
                            <h4>Harry Gold</h4>
                            <small>Webdesigner</small>
                        </div>
                    </div>
                    <div class="col-md-3 wow bounceIn">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="images/team/thumb1.jpg" alt="" class="img-circle">
                                <div class="mask"></div>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-facebook fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope fw"></i></a></li>
                                </ul>
                            </div>
                            <h4>Jane Smith</h4>
                            <small>Sales</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="testimonials" class="container padding35">
            <div class="row wow fadeIn">
                <div class="col-md-12 text-center">
                    <h3 class="text-uppercase text-bold">Testimonials</h3>
                    <div class="space40"></div>
                </div>

                <div class="col-md-12 ">
                    <!-- carousel start -->
                    <div id="testimonials-carousel" class="owl-carousel">

                        <div class="testimonial">
                            <blockquote>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi, id est laborum et dolorum fuga.</p>
                                <small>Jabe Doe <span class="pull-right avatar-container"><img alt=""
                                            class="img-circle avatar" src="images/team/thumb1_40.jpg"></span></small>
                            </blockquote>
                        </div>

                        <div class="testimonial">
                            <blockquote>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi, id est laborum et dolorum fuga.</p>
                                <small>Sarah Smith <span class="pull-right avatar-container"><img alt=""
                                            class="img-circle avatar" src="images/team/thumb4_40.jpg"></span></small>
                            </blockquote>
                        </div>

                        <div class="testimonial">
                            <blockquote>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi, id est laborum et dolorum fuga.</p>
                                <small>John Doe <span class="pull-right avatar-container"><img alt=""
                                            class="img-circle avatar" src="images/team/thumb8_40.jpg"></span></small>
                            </blockquote>
                        </div>

                    </div>
                    <!-- carousel end -->
                </div>
            </div>
        </div>



        <div id="partners" class="container-fluid bg-gray padding35">
            <div class="container">
                <div class="row wow fadeIn">
                    <div class="col-md-12 text-center">
                        <h3 class="text-uppercase">Our <b>Partners</b></h3>
                        <div class="space40"></div>
                    </div>

                    <div class="col-md-12 ">
                        <!-- carousel start -->
                        <div id="partners-gallery" class="owl-carousel">

                            <div class="text-center">
                                <img alt="" src="images/partners/pinterest.png">
                            </div>

                            <div class="text-center">
                                <img alt="" src="images/partners/wordpress.png">
                            </div>

                            <div class="text-center">
                                <img alt="" src="images/partners/pinterest.png">
                            </div>

                            <div class="text-center">
                                <img alt="" src="images/partners/dribbble.png">
                            </div>

                            <div class="text-center">
                                <img alt="" src="images/partners/pinterest.png">
                            </div>

                            <div class="text-center">
                                <img alt="" src="images/partners/wordpress.png">
                            </div>

                            <div class="text-center">
                                <img alt="" src="images/partners/pinterest.png">
                            </div>

                        </div>
                        <!-- carousel end -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- CONTENT END -->

    <!-- CALL TO ACTION START -->
    <section id="call-to-action">
        <div class="parallax parallax-container">
            <div class="bg-mask-black"></div>
            <div class="container text-white">
                <div class="row">
                    <div class="col-md-10">
                        <h1>More than <b class="counter">100</b> happy clients! <small class="text-white">Are you
                                interested?</small></h1>
                    </div>
                    <div class="col-md-2 text-center">
                        <button type="submit" class="btn btn-primary btn-lg margin15 text-uppercase">Join Us Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CALL TO ACTION END -->
@endsection
@section('shopping-cart')

        Cart ({{ $cartCount }})

@endsection

