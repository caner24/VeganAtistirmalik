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
                        Yorum Yönetimi
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Kullanici Adi</th>
                                        <th>S</th>
                                        <th>Yapılan Ürün</th>
                                        <th>İsReady</th>
                                        <th>İsShipping</th>
                                        <th>İsOk</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($comments as $key => $value)
                                    <tr class="odd gradeX">
                                        <td>{{ $usernames[$key] }} </td>
                                        <td>{{ $value->CommentText }} </td>
                                        <td>{{ $prodcutNames[$key] }} </td>
                                        <td> <a href="{{ route('deleteComment', ['details' => $value->id]) }}" class="btn btn-danger " type="submit">Sil</a></td>
                                        @if ($value->isReady == 1)
                                        <td> <a disabled class="btn btn-info " type="submit">Onayla
                                            </a></td>
                                        @else
                                        <td> <a href="{{ route('okComment', ['details' => $value->id]) }}" class="btn btn-info " type="submit">Onayla
                                            </a></td>
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
            document.querySelector('#commentManagement').classList.add('active-menu');
        </script>
        @endsection