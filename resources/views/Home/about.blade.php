@extends('Shared._layout')

@section('menubar')
<section id="title" class="container-fluid wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Hakkımızda</h1>
            </div>
            <div class="col-xs-6 text-right breadcrumbs">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>/</li>
                    <li>Hakkımızda</li>
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
                <img alt="" class="img-circle" src="https://images.squarespace-cdn.com/content/v1/58f1f97bebbd1aeb69f1482a/1564391947562-H3IOVKZEQ7GXWVPBDF3E/100%25-Vegan.gif">
            </div>

            <div class="col-md-6 wow fadeInRight">
                <h2>BİZİM HAKKIMIZDA <b>VEGAN SATIŞ</b></h2>
                <p class="lead">Yaşam biçiminize saygı </p>
                <div class="space20"></div>
                <h4 class="text-uppercase text-bold">Neden bizi tercih etmelisiniz ? </h4>
                <p>Kaliteli ürünlerinden oluşan alternatiflerimizle, Vegan Dünyası olarak, vegan hayat tarzını benimseyen tüm hayvan severlere hizmet etmenin mutluluğunu yaşıyoruz.</p>
                <div class="space20"></div>
                <h4 class="text-uppercase text-bold">Neler Yapıyoruz</h4>
                <p>Vegan olmayı hayatımızı zorlayacak bir kısıtlamalar zinciri olarak düşünmemeliyiz. Gıda / ürün seçimlerimizin birçoğu mecburiyetten değil, alışkanlıklarımızdan ve kolaycılığımızdan kaynaklanıyor. Hayvanlara zarar vermeden yaşamayı öğrenmek hem insan doğamıza ait değerlere uygun bir yaşam sürmemizi sağlar hem de hayata karşı şiddetsizlik yolunda önemli bir kapıyı aralar.
Veganlık bir hayvanseverlik meselesi değildir, tüm yaşama saygı demektir. Hayvanları kullanmaya devam ettiğimiz müddetçe, gıda, giyim, kozmetik ve diğer bahanelerle hayvanların ölümüne sebep oluyoruz. Bu evrendeki her şey birbirine bağlı olduğundan, verdiğimiz her karar sadece kendimizi değil, komşularımızın, gezegenimizin ve dünyamızı paylaşan tüm canlıların kaderini de etkiliyor. </p>
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
                    <h1>Toplam kullanıcılarımızın yapmış olduğu sipariş sayısı <b class="counter">{{$fiecheCount}}</b> mutlu müşteri! </h1>
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