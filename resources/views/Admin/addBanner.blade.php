@extends('Shared._layoutAdmin')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">

        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        Banner
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
                                <form method="POST" action="{{route('setBanners')}}" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Banner Adı</label>
                                        <input required type="text" name="bannerName" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Banner Fotoğrafı</label>
                                        <input required name="bannerPhoto" type="file" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="submit" value="Kaydet" />
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
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        Ürün Stok Yönetimi
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Banner</th>
                                        <th>Banner Adi</th>
                                        <th>Sil</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($veriler as $key => $value)
                                    <tr class="odd gradeX">
                                        <td><img style="width:10%" src="/images/{{ $value->path }}"> </td>
                                        <td>{{ $value->name }} </td>
                                        <td> <a href="{{ route('deleteBanner', ['datas' => $value->id]) }}" class="btn btn-danger " type="submit">Sil
                                            </a></td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
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
    document.querySelector('#addBanner').classList.add('active-menu');
</script>
@endsection