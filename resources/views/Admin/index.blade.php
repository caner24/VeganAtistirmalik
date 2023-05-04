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
                        <p class="main-text">{{$orderCount}} SİPARİŞ</p>
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
                        <p class="main-text">{{$okOrderCount}} SİPARİŞ TAMAMLANDI</p>
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

        <!-- /. ROW  -->
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading" style="display: flex;width:100%">
                        <h2>SİPARİŞ YÖNETİMİ</h2>
                        <div style="justify-self:end;align-self: center;margin-left:auto">
                            <form method="get" action="{{route('admin')}}">
                                <input name="userName" type="text" />
                                <input type="submit" class="btn btn-success" value="ARA" />
                            </form>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Ürün Fotoğraf</th>
                                        <th>Kullanici Adi</th>
                                        <th>Toplam Tutar</th>
                                        <th>ADET</th>
                                        <th>HAZIRLANDI</th>
                                        <th>KARGODA</th>
                                        <th>TESLİM ALINDI</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($productListers as $key=>$value)
                                    <tr>
                                        <td><img style="width:10%" src="/images/{{$photos[$key][0]->Path}}"> </td>
                                        <td>{{$usernamesFieche[$key][0]->name}}</td>

                                        <td>{{$value->LineTotal}}</td>
                                        <td>{{$value->counts}}</td>

                                        @if($value->isReady)
                                        <td>
                                            <a class=" btn btn-info disabled " href="{{ route('setFieches', ['id' => $value->id,'status'=>1]) }}">EVET</a>
                                        </td>
                                        @if($value->isShipping)
                                        <td>
                                            <a class="btn btn-warning disabled" href="{{ route('setFieches', ['id' => $value->id,'status'=>2]) }}">EVET</a>
                                        </td>
                                        @if($value->isOk)
                                        <td>
                                            <a class="btn btn-success disabled " href="{{ route('setFieches', ['id' => $value->id,'status'=>3]) }}">EVET</a>
                                        </td>
                                        @else
                                        <td>
                                            <a class="btn btn-success " href="{{ route('setFieches', ['id' => $value->id,'status'=>3]) }}">EVET</a>
                                        </td>
                                        @endif
                                        @else
                                        <td>
                                            <a class="btn btn-warning " href="{{ route('setFieches', ['id' => $value->id,'status'=>2]) }}">EVET</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-success disabled" href="{{ route('setFieches', ['id' => $value->id,'status'=>3]) }}">EVET</a>
                                        </td>
                                        @endif
                                        @else
                                        <td>
                                            <a class=" btn btn-info " href="{{ route('setFieches', ['id' => $value->id,'status'=>1]) }}">EVET</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning disabled" href="{{ route('setFieches', ['id' => $value->id,'status'=>2]) }}">EVET</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-success disabled" href="{{ route('setFieches', ['id' => $value->id,'status'=>3]) }}">EVET</a>
                                        </td>
                                        @endif

                                    </tr>
                                    @endforeach
                                </tbody>



                            </table>

                        </div>

                    </div>
                    <div style="position:relative">
                        @for($i=1;$i<$productCount;$i++) @if($i%6==0) <a class="btn btn-primary">{{$i/6}}</a>
                            @endif
                            @endfor
                    </div>
                </div>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

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

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    document.querySelector('#dashboard').classList.add('active-menu');
</script>
@endsection