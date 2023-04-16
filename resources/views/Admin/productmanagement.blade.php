@extends('Shared._layoutAdmin')

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Forms Page</h2>
                    <h5>Welcome Jhon Deo , Love to see you back. </h5>

                </div>
            </div>
            <hr />
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
                                <div class="col-md-6">
                                    <form method="POST" action="{{ route('addproduct') }}" role="form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Ürün Adı</label>
                                            <input type="text" name="productName" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Ürün Markasi</label>
                                            <select name="owners">
                                                <option value=""></option>
                                                @foreach ($owners as $key => $value)
                                                    <option value="{{ $value->id }}">{{ $value->Name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ürün Kategorisi</label>
                                            <select name="category">
                                                <option value=""></option>
                                                @foreach ($category as $key => $value)
                                                    <option value="{{ $value->id }}">{{ $value->Name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ürün Adeti</label>
                                            <input name="productCount" type="number" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Ürün Fiyati</label>
                                            <input name="productPrice" type="text" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Ürün Fotoğrafı</label>
                                            <input name="productPhoto" type="file" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="submit" value="Gönder" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Marka Ekle
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
                                <div class="col-md-6">
                                    <form action="{{ route('addowner') }}" method="POST" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <label>Marka Adi</label>
                                            <input type="text" name="ownername" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="submit" value="Gönder" />
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Kategori Ekle
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
                                <div class="col-md-6">
                                    <form action="{{ route('addcategory') }}" method="POST" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <label>Kategori Adi</label>
                                            <input type="text" name="category" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="submit" value="Gönder" />
                                        </div>

                                    </form>
                                </div>
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
        document.querySelector('#ürünyönetim').classList.add('active-menu');
    </script>
@endsection
