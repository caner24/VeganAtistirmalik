@extends('Shared._layout')

@section('menubar')
<section class="cd-hero">
    <ul class="list-unstyled cd-hero-slider autoplay">

        @foreach($items as $key=>$value)
        @if($key==0)
        <li class="selected" style="background-image:url('/images/{{$value->path}}');">
            @else
        <li style="background-image:url('/images/{{$value->path}}');">
     
            @endif
        
            <div class="container">

                <h2>{{$value->name}}</h2>
                <a href="#" class="btn btn-primary btn-lg text-uppercase">HEMEN AL</a>
            </div>
        </li>
        @endforeach
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
                <h2>Yaşam Stilinize Saygı <b>%100 VEGAN</b> COMPLETED</h2>
            </div>

            <div class="col-md-2 text-center">
                <a href="{{ route('urungetir') }}" class="btn btn-primary btn-lg margin15 text-uppercase">ÜRÜNLERE
                    GÖZAT</a>
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
                        <img alt="" class="img-responsive img-circle " src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzEwNjQyNjA2Mzg2MmY4ODRlYmJlMjZiOWU1ZWVlN2EwZTJiNDdmYyZjdD1z/SVIPa2nS8B3bVb58z1/giphy.gif">
                    </div>

                    <div class="col-md-6 wow fadeIn">
                        <h4>Stay Vegan Stay <b>HEALTHY</b></h4>
                        <p>Bitki bazlı, yumurta ve süt dahil hiçbir hayvansal ürün yenmez. Veganlığın savunulan faydası
                            düşük vücut kitle indeksi ve düşük kan basıncı sağlaması bu bağlamda kalp hastalığı, diyabet
                            ve kanser için azaltılmış risk oluşturması ve daha uzun ömür sağlaması ile
                            ilişkilendirilmesidir</p>

                        <p>Vegan beslenme hangi hastalıklara iyi gelir?
                            Beslenme ve Diyet Uzmanının verdiği bilgiye göre, vegan beslenmede yüksek lif ve posa alımı
                            sayesinde kan şekeri dengesi sağlanabiliyor ve bu durum kişiyi Tip 2 diyabet ve insülin
                            direncine karşı koruyor</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div id="services-4">
                    <div class="row wow fadeIn">
                        <div class="col-md-12">
                            <h4 class="text-uppercase"> <b>Certificate ® </b></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature wow fadeInUp">
                                <i class="fa  fa-solid fa-leaf"></i>
                                <h4 class="text-uppercase">%100 VEGAN</h4>
                                <p>Bu sitedeki ürünler %100 Vegan ürünlerdir.</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>









    <!-- CALL TO ACTION END -->
    @endsection
    @section('shopping-cart')
    Cart ({{ $cartCount }})
    @endsection