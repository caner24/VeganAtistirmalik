@extends('Shared._layoutAdmin')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">

        <!-- /. ROW  -->
        <hr />

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        Kullanici Yönetimi
                    </div>
                    <div style="margin:1%"><a style="margin:1%" class="btn btn-warning"></a>KULLANICI OTURUM AÇMA TALEBİ <span style="color:red;font-weight: bold;">VERMEMİŞ</span> <a style="margin:1%" class="btn btn-success"></a>KULLANICI OTURUM AÇMA <span style="font-weight: bold;color:green">VERMİŞ</span></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Ad</th>
                                        <th>Email</th>
                                        <th>Hesap-Dondur</th>
                                        <th>Hesap-Aç</th>
                                        <th>Durum</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($veriler as $key => $value)
                                    <tr class="odd gradeX">
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        @if ($value->isdisable)
                                        <td>
                                            <button class="btn btn-danger disabled" type="submit">Hesap
                                                Dondur</button>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('freezebreak') }}">
                                                @csrf
                                                <input type="text" hidden value="{{ $value->id }}" name="userId">
                                                <button class="btn btn-info " type="submit">Hesap
                                                    AÇ</button>
                                            </form>
                                        </td>
                                        @if($value->isrequest)
                                        <td>
                                            <a class="btn btn-success ">TALEP</a>
                                        </td>
                                        @else
                                        <td>
                                            <a class="btn btn-warning ">TALEP</a>
                                        </td>

                                        @endif
                                        @else
                                        <td>
                                            <form method="POST" action="{{ route('freeze') }}">
                                                @csrf
                                                <input type="text" hidden value="{{ $value->id }}" name="userId">
                                                <button class="btn btn-danger " type="submit">Hesap
                                                    Dondur</button>
                                            </form>
                                        </td>
                                        <td>
                                            <button class="btn btn-info disabled" type="submit">Hesap
                                                AÇ</button>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning disabled ">TALEP</a>
                                        </td>
                                        @endif


                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('scripts')
        <script>
            document.querySelector('#userManagement').classList.add('active-menu');
        </script>
        @endsection