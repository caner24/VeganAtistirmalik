@extends('Shared._layoutAdmin')
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Table Examples</h2>
                    <h5>Welcome Jhon Deo , Love to see you back. </h5>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Kullanici Yönetimi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Resim</th>
                                            <th>Resim Adi</th>
                                            <th>Sil</th>
                                            <th>Güncelle</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($veriler as $key => $value)
                                            <tr class="odd gradeX">
                                                <td><img style="width:10%" src="/images/{{ $value->Path }}"> </td>
                                                <td>{{ $value->Path }} </td>
                                                <td> <button class="btn btn-danger " type="submit">Sil</button></td>
                                                <td> <button class="btn btn-info " type="submit">Güncelle
                                                    </button></td>
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
                document.querySelector('#productManagement').classList.add('active-menu');
            </script>
        @endsection
