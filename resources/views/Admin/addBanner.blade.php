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
                                        <input  required type="text" name="bannerName" class="form-control" />
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
    </div>
</div>
@endsection
@section('scripts')
<script>
    document.querySelector('#addBanner').classList.add('active-menu');
</script>
@endsection