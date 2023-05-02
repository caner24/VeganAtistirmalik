

@extends('Shared._profile')

@section('menubar')
<div class="text-center card-header">
    <h1>ADRESS</h1>
</div>
<div class="card-body ">
    <span class="badge badge-warning">HAZIRLANDI</span>
    <span class="badge badge-info">KARGODA</span>
    <span class="badge badge-success">TESLİM EDİLDİ</span>
    <span class="badge badge-danger">BEKLENİYOR</span>
    <table class="table table-stripped table-bordered  ">
        <thead class="d-flex w-100 ">
            <tr class="d-flex w-100">
                <th class="w-25">ÜrünResmi</th>
                <th class="w-25">ÜrünAdi</th>
                <th class="w-25">Fiyati</th>
                <th class="w-25">Hazirlandi</th>
                <th class="w-25">Kargoda</th>
                <th class="w-25">TeslimEdildi</th>
            </tr>
        </thead>
        <tbody class="d-flex flex-column w-100  overflow-auto" style="max-height: 120px;">
            <tr class="d-flex  w-100">
                <td class="w-25">1</td>
                <td class="w-25">1</td>
                <td class="w-25">1</td>
                <td class="w-25 btn btn-warning"></td>
                <td class="w-25 btn btn-info"></td>
                <td class="w-25 btn btn-success"></td>
            </tr>
            <tr class="d-flex  w-100">
                <td class="w-25">1</td>
                <td class="w-25">1</td>
                <td class="w-25">1</td>
                <td class="w-25 btn btn-danger">*</td>
                <td class="w-25 btn btn-danger">*</td>
                <td class="w-25 btn btn-danger">*</td>
            </tr>
            <tr class="d-flex  w-100">
                <td class="w-25">1</td>
                <td class="w-25">1</td>
                <td class="w-25">1</td>
                <td class="w-25 btn btn-danger">*</td>
                <td class="w-25 btn btn-danger">*</td>
                <td class="w-25 btn btn-danger">*</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection