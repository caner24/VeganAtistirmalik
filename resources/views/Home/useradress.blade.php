@extends('Shared._profile')

@section('menubar')

<div class="text-center card-header">
    <h1>ADRESS</h1>
</div>
<div class="card-body ">
<span class="badge badge-success">Varsayilan Adres</span>
    <span class="badge badge-warning">Varsayilan Değil</span>
    <table class="table table-stripped table-bordered  ">
        <thead class="d-flex w-100 ">
            <tr class="d-flex w-100">
                <th class="w-25">İl</th>
                <th class="w-25">İlçe</th>
                <th class="w-25">Adress</th>
                <th class="w-25">Varsayilan</th>
            </tr>
        </thead>
        <tbody class="d-flex flex-column w-100  overflow-auto" style="max-height:100px;">

            @foreach($userAdress as $key=>$value)
            <tr class="d-flex  w-100">

                <td class="w-25">{{$value->Region}}</td>
                <td class="w-25">{{$value->Province}}</td>
                <td class="w-25">{{$value->AdressText}}</td>
                @if($value->isDefault)
                <td class="w-25 d-flex"><a class="btn btn-success  w-100  "></a></td>
                @else
                <td class="w-25 d-flex"><a class="btn btn-warning  w-100  "></a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection