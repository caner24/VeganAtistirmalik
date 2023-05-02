@extends('Shared._profile')

@section('menubar')

<div class="text-center card-header">
    <h1>ADRESS</h1>
</div>
<div class="card-body ">
    <table class="table table-stripped table-bordered  ">
        <thead class="d-flex w-100 ">
            <tr class="d-flex w-100">
                <th class="w-25">Hesap Adi</th>
                <th class="w-25">Mail Adress</th>
                <th class="w-25">Dondur</th>
            </tr>
        </thead>
        <tbody class="d-flex flex-column w-100  overflow-auto" style="max-height:100px;">
            <tr class="d-flex  w-100">
                <td class="w-25">{{auth()->user()->name}}</td>
                <td class="w-25">{{auth()->user()->email}}</td>
                <td class="w-25"><a class="btn btn-danger" href="{{ route('postFreeze', ['userId' => auth()->user()->id]) }}">Dondur</a></td>

            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection