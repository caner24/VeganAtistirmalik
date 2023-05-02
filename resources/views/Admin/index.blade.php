@extends('Shared._layoutAdmin')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Admin Dashboard</h2>
                <h5>Hoşgeldiniz Sayin {{auth()->user()->name}} . </h5>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                        <i class="fa fa-shopping-cart"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text">{{$productCount}}</p>
                        <p class="text-muted">MEVCUT ÜRÜN SAYİSİ</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-brown set-icon">
                        <i class="fa fa-truck"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text">3 SİPARİŞ</p>
                        <p class="text-muted">HENÜZ TESLİM EDİLMEMİŞ SİPARİŞ SAYİSİ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-brown set-icon">
                        <i class="fa fa-check"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text">3 SİPARİŞ TAMAMLANDI</p>
                        <p class="text-muted">TAMAMLANAN SİPARİŞ SAYISI</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">




        </div>
        <!-- /. ROW  -->
        <div class="row">


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Bar Chart Example
                    </div>
                    <div class="panel-body">
                        <div id="morris-bar-chart"></div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /. ROW  -->
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        SİPARİŞ YÖNETİMİ
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>User No.</th>
                                        <th>HAZIRLANDI</th>
                                        <th>KARGODA</th>
                                        <th>TESLİM ALINDI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>100090</td>
                                        <td>
                                            <button class="btn btn-info " type="submit">EVET</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-info disabled" type="submit">EVET</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-info disabled" type="submit">EVET</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">

                <div class="chat-panel panel panel-default chat-boder chat-panel-head">
                    <div class="panel-heading">
                        <i class="fa fa-comments fa-fw"></i>
                        Son Yapilan <span style="font-weight: bolder">" 5 " </span> Yorum

                    </div>

                    <div class="panel-body">
                        <ul class="chat-box">
                            @foreach ($comments as $key => $value)
                            @if($key%2==0)
                            <li class="left clearfix">
                                <span class="chat-img pull-left">
                                    <i class="fa fa-user fa-fw" style="font-size: 50px;" class="img-circle"></i>
                                </span>
                                <div class="chat-body">
                                    <strong>{{ $usernames[$key] }}</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-info fa-fw"></i>Yapilan Ürün : {{ $prodcutNames[$key] }}
                                    </small>
                                    <p>
                                        {{ $value->CommentText }}
                                    </p>
                                </div>
                                @else
                            <li class="right clearfix">
                                <span class="chat-img pull-right">
                                    <i class="fa fa-user fa-fw" style="font-size: 50px;" class="img-circle"></i>
                                </span>
                                <div class="chat-body">
                                    <strong class="pull-right">{{ $usernames[$key] }}</strong>
                                    <small class="pull-left text-muted">
                                        <i class="fa fa-info fa-fw"></i>Yapilan Ürün : {{ $prodcutNames[$key] }}
                                    </small>
                                    <p>
                                        {{ $value->CommentText }}
                                    </p>
                                </div>
                                @endif

                            </li>
                            @endforeach
                        </ul>
                    </div>



                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Donut Chart Example
                    </div>
                    <div class="panel-body">
                        <div id="morris-donut-chart"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    document.querySelector('#dashboard').classList.add('active-menu');
</script>
@endsection