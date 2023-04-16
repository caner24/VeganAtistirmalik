@extends('Shared._layout')

@section('menubar')
    <section class="cd-hero">
        <ul class="list-unstyled cd-hero-slider autoplay">


            <li class="selected" style="background-image:url('images/slides/slide3.jpg');">
                <div class="container">

                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</h2>
                    <a href="#" class="btn btn-primary btn-lg text-uppercase">Hello World</a>
                </div>
            </li>
            <li style="background-image:url('images/slides/slide3.jpg');">
                <div class="container">

                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</h2>
                    <a href="#" class="btn btn-primary btn-lg text-uppercase">Hello World</a>
                </div>
            </li>

        </ul>
        <div class="arrow-nav">
            <div class="prev"><a class="hero-prev" href="#"><i class="fa fa-angle-left"></i></a></div>
            <div class="next"><a class="hero-next" href="#"><i class="fa fa-angle-right"></i></a></div>
        </div>

    </section>



    <div id="intro" class="container-fluid bg-dark padding15">
        <div class="container">
            <div class="row">
                <div class="col-md-10 text-left">
                    <h2>OVER <b class="counter">100</b> COMPLETED <b>PROJECTS</b></h2>
                </div>

                <div class="col-md-2 text-center">
                    <button type="submit" class="btn btn-primary btn-lg margin15 text-uppercase">Join Us Now</button>
                </div>
            </div>
        </div>
    </div>


    <!-- CONTENT START -->
    <section id="home-content">

        <div id="home-intro" class="container padding35">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 text-center wow bounceIn">
                            <img alt="" class="img-responsive img-circle" src="images/other/corporate.jpg">
                        </div>

                        <div class="col-md-6 wow fadeIn">
                            <h4>WE ARE <b>EDURA</b></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.
                                Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis
                                sagittis ipsum. Praesent mauris. <b>Lorem ipsum dolor sit amet,</b> consectetur adipiscing
                                elit. </p>
                            <ul class="list-unstyled home-list">
                                <li><i class="fa fa-check-circle fa-fw"></i> Responsive Design</li>
                                <li><i class="fa fa-check-circle fa-fw"></i> Multiple Layouts</li>
                                <li><i class="fa fa-check-circle fa-fw"></i> Mobile Ready</li>
                                <li><i class="fa fa-check-circle fa-fw"></i> Bootstrap Powered</li>
                                <li><i class="fa fa-check-circle fa-fw"></i> 4 Contact Us Templates</li>
                                <li><i class="fa fa-check-circle fa-fw"></i> Portfolio</li>
                                <li><i class="fa fa-check-circle fa-fw"></i> eCommerce Ready</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div id="services-4">
                        <div class="row wow fadeIn">
                            <div class="col-md-12">
                                <h4 class="text-uppercase">Top <b>Features</b></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="feature wow fadeInUp">
                                    <i class="fa fa-bar-chart"></i>
                                    <h4 class="text-uppercase">Responsive Design</h4>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et.</p>
                                </div>
                                <div class="feature wow fadeInUp">
                                    <i class="fa fa-star"></i>
                                    <h4 class="text-uppercase">Multiple Layouts</h4>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et.</p>
                                </div>
                                <div class="feature wow fadeInUp">
                                    <i class="fa fa-mobile"></i>
                                    <h4 class="text-uppercase">Mobile Friendly</h4>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et.</p>
                                </div>
                                <div class="feature wow fadeInUp">
                                    <i class="fa fa-rocket"></i>
                                    <h4 class="text-uppercase">Bootstrap Powered</h4>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </div>


        <div id="projects" class="container-fluid bg-gray padding35">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h3>LATEST <b>PROJECTS</b></h3>
                    </div>


                    <div id="portfolio-carousel-home" class="owl-carousel">

                        <div class="portfolio-item">
                            <div class="portfolio-top">
                                <img alt="" class="img-responsive" src="images/portfolio/portfolio1.jpg">
                                <div class="mask"></div>
                                <span class="portfolio-tag"><i class="fa fa-tag fa-fw"></i> <a href="#">Scripts</a>,
                                    <a href="#">Technology</a></span>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-search fa-fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                </ul>
                            </div>
                            <span class="portfolio-item-desc"><a href="#">Template Development</a></span>
                        </div>

                        <div class="portfolio-item">
                            <div class="portfolio-top">
                                <img alt="" class="img-responsive" src="images/portfolio/portfolio2.jpg">
                                <div class="mask"></div>
                                <span class="portfolio-tag"><i class="fa fa-tag fa-fw"></i> <a
                                        href="#">Technology</a></span>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-search fa-fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                </ul>
                            </div>
                            <span class="portfolio-item-desc"><a href="#">Website Design</a></span>
                        </div>

                        <div class="portfolio-item">
                            <div class="portfolio-top">
                                <img alt="" class="img-responsive" src="images/portfolio/portfolio3.jpg">
                                <div class="mask"></div>
                                <span class="portfolio-tag"><i class="fa fa-tag fa-fw"></i> <a
                                        href="#">Scripts</a>, <a href="#">Development</a></span>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-search fa-fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                </ul>
                            </div>
                            <span class="portfolio-item-desc"><a href="#">Mobile App</a></span>
                        </div>

                        <div class="portfolio-item">
                            <div class="portfolio-top">
                                <img alt="" class="img-responsive" src="images/portfolio/portfolio4.jpg">
                                <div class="mask"></div>
                                <span class="portfolio-tag"><i class="fa fa-tag fa-fw"></i> <a href="#">Web
                                        Design</a>, <a href="#">Technology</a></span>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-search fa-fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                </ul>
                            </div>
                            <span class="portfolio-item-desc"><a href="#">App Development</a></span>
                        </div>

                        <div class="portfolio-item">
                            <div class="portfolio-top">
                                <img alt="" class="img-responsive" src="images/portfolio/portfolio5.jpg">
                                <div class="mask"></div>
                                <span class="portfolio-tag"><i class="fa fa-tag fa-fw"></i> <a href="#">Web
                                        Design</a>, <a href="#">Development</a></span>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-search fa-fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                </ul>
                            </div>
                            <span class="portfolio-item-desc"><a href="#">Website Optimization</a></span>
                        </div>

                        <div class="portfolio-item">
                            <div class="portfolio-top">
                                <img alt="" class="img-responsive" src="images/portfolio/portfolio6.jpg">
                                <div class="mask"></div>
                                <span class="portfolio-tag"><i class="fa fa-tag fa-fw"></i> <a
                                        href="#">Technology</a>, <a href="#">Development</a></span>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><i class="fa fa-search fa-fw"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link fa-fw"></i></a></li>
                                </ul>
                            </div>
                            <span class="portfolio-item-desc"><a href="#">Network Concept</a></span>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <div id="testimonials" class="container padding35">
            <div class="row wow fadeIn">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-uppercase text-bold text-center">Latest Blog Posts</h4>
                            <div class="space20"></div>
                        </div>

                        <div class="col-md-12">
                            <!-- carousel start -->
                            <div id="blog-carousel-home" class="owl-carousel">


                                <div>
                                    <div class="blog-item">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <a href="#">
                                                    <img alt="" class="img-responsive"
                                                        src="images/blog/blog2.jpg">
                                                </a>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="blog-item-inner">
                                                    <h4><a href="#">Best site template</a></h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the...</p>
                                                </div>

                                                <div class="row blog-meta">
                                                    <div class="col-xs-6"><i class="fa fa-calendar fa-fw"></i> August,
                                                        4th, 2016</div>
                                                    <div class="col-xs-6"><i class="fa fa-folder-open fa-fw"></i> Themes
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="blog-item">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <a href="#">
                                                    <img alt="" class="img-responsive"
                                                        src="images/blog/blog3.jpg">
                                                </a>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="blog-item-inner">
                                                    <h4><a href="#">Best site template</a></h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the...</p>
                                                </div>

                                                <div class="row blog-meta">
                                                    <div class="col-xs-6"><i class="fa fa-calendar fa-fw"></i> August,
                                                        4th, 2016</div>
                                                    <div class="col-xs-6"><i class="fa fa-folder-open fa-fw"></i> Themes
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="blog-item">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <a href="#">
                                                    <img alt="" class="img-responsive"
                                                        src="images/blog/blog1.jpg">
                                                </a>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="blog-item-inner">
                                                    <h4><a href="#">Best site template</a></h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the...</p>
                                                </div>

                                                <div class="row blog-meta">
                                                    <div class="col-xs-6"><i class="fa fa-calendar fa-fw"></i> August,
                                                        4th, 2016</div>
                                                    <div class="col-xs-6"><i class="fa fa-folder-open fa-fw"></i> Themes
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- carousel end -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-uppercase text-bold text-center">Testimonials</h4>
                            <div class="space20"></div>
                        </div>

                        <div class="col-md-12">
                            <!-- carousel start -->
                            <div id="testimonials-carousel-home" class="owl-carousel">

                                <div class="testimonial">
                                    <blockquote>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                            excepturi sint occaecati cupiditate non provident, similique.</p>
                                        <small>Jabe Doe <span class="pull-right avatar-container"><img alt=""
                                                    class="img-circle avatar"
                                                    src="images/team/thumb1_40.jpg"></span></small>
                                    </blockquote>
                                </div>

                                <div class="testimonial">
                                    <blockquote>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                            excepturi sint occaecati cupiditate non provident, similique.</p>
                                        <small>Sarah Smith <span class="pull-right avatar-container"><img alt=""
                                                    class="img-circle avatar"
                                                    src="images/team/thumb4_40.jpg"></span></small>
                                    </blockquote>
                                </div>

                                <div class="testimonial">
                                    <blockquote>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                            excepturi sint occaecati cupiditate non provident, similique.</p>
                                        <small>John Doe <span class="pull-right avatar-container"><img alt=""
                                                    class="img-circle avatar"
                                                    src="images/team/thumb8_40.jpg"></span></small>
                                    </blockquote>
                                </div>

                            </div>
                            <!-- carousel end -->
                        </div>
                    </div>
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

