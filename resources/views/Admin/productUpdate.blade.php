@extends('Shared._layoutAdmin')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        Ürün Ekle
                    </div>
                    <div>
                        @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $hatalar)
                            <li>{{ $hatalar }}</li>

                        </ul>
                        @endforeach
                        @endif
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('updateProducts') }}" role="form" enctype="multipart/form-data">
                                    @csrf

                                    @foreach ($products as $key => $value)
                                    <div class="form-group">
                                        <label>Ürün Adı</label>
                                        <input hidden type="text" name="productId" value="{{$value->id}}">
                                        <input type="text" value="{{ $value->ProductName }}" name="productName" class="form-control" />
                                    </div>
                                    @endforeach

                                    <div class="form-group">
                                        <label>Ürün Markasi</label>
                                        <select name="owners">
                                            @foreach ($allOwner as $key => $value)
                                            @if ($value->Name == $productOwner[0]->Name)
                                            <option selected value="{{ $value->id }}">{{ $value->Name }}
                                            </option>
                                            @else
                                            <option value="{{ $value->id }}">{{ $value->Name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Ürün Kategorisi</label>
                                        <select name="category">
                                            @foreach ($allCategory as $key => $value)
                                            @if ($value->Name == $productCategory[0]->Name)
                                            <option selected value="{{ $value->id }}">{{ $value->Name }}
                                            </option>
                                            @else
                                            <option value="{{ $value->id }}">{{ $value->Name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    @foreach ($productDetails as $key => $value)
                                    <div class="form-group">
                                        <label>Ürün Adeti</label>
                                        <input value="{{ $value->Count }}" name="productCount" type="number" class="form-control" />
                                    </div>

                                    <div class="form-group">
                                        <label>Ürün Fiyati</label>
                                        <input value="{{ $value->UnitPrice }}" name="productPrice" type="text" class="form-control" />
                                    </div>
                                    @endforeach
                                    @foreach ($datas as $key => $value)
                                    <div class="form-group">
                                        <label>Ürün Fotoğrafı</label>
                                        <br>
                                        <input type="text" hidden value="photoId" value="{{$value->id}}">
                                        <input type="text" hidden value="photoName" value="{{$value->Path}}">
                                        <img style=" width:10%" src="images/{{ $value->Path }}" />
                                        <input name="productPhoto" type="file" class="form-control" />
                                    </div>
                                    @endforeach

                                    <div class="form-group">
                                        <input class="btn btn-success form-control" type="submit" value="Güncelle" />
                                    </div>

                                </form>
                                @if($products[0]->isStock==0)
                                <div class="form-group">
                                    <a href="{{ route('satiscek', ['id' => $value->id]) }}" name="satiscek" class="btn btn-danger text-center form-control">Satistan Cek</a>
                                </div>
                                @else
                                <div class="form-group">
                                    <a href="{{ route('satiscek', ['id' => $value->id,'isOk'=>1]) }}" name="satiscek" class="btn btn-info text-center form-control">Satisa Getir</a>
                                </div>
                                @endif



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    document.querySelector('#productManagement').classList.add('active-menu');
</script>
@endsection