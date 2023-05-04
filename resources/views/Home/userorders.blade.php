@extends('Shared._profile')

@section('menubar')
<div class="text-center card-header">
    <h1>SİPARİŞLER</h1>
</div>
<div class="card-body ">
    <span class="badge badge-warning">HAZIRLANDI</span>
    <span class="badge badge-info">KARGODA</span>
    <span class="badge badge-success">TESLİM EDİLDİ</span>
    <table class="table table-stripped table-bordered d-flex flex-column  ">
        <thead class="d-flex flex-column w-100  overflow-auto  ">
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
            @foreach($fieches as $key => $value)
            <tr class="d-flex  w-100">
                <td class="w-25"><img class="w-100" src="images/{{$images[$key][0]->Path}}"></td>
                <td class="w-25">{{$products[$key][0]->ProductName}}</td>
                <td class="w-25">{{$value->LineTotal}}</td>
                @if($value->isReady)
                <td class="w-25 btn btn-warning"></td>
                @if($value->isShipping)
                <td class="w-25 btn btn-info"></td>
                @if($value->isOk)
                <td class="w-25 btn btn-success"></td>
                @else
                <td class="w-25 btn btn-success disabled"></td>
                @endif
                @else
                <td class="w-25 btn btn-info disabled"></td>
                <td class="w-25 btn btn-success disabled"></td>
                @endif
                @else
                <td class="w-25 btn btn-warning disabled"></td>
                <td class="w-25 btn btn-info disabled"></td>
                <td class="w-25 btn btn-success disabled"></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection