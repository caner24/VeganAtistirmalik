@extends('Shared._profile')

@section('menubar')

<div class="text-center card-header">
    <h1>ADD-ADRESS</h1>
</div>
<div class="card-body ">

    <form class="form" method="post" action="{{route('addAdress')}}">
        @csrf
        <div class="d-flex">
            <div class="w-50 form-group d-flex justify-content-xl-around">
                <label class="form-items w-25" for="ulke">Ulke</label>
                <input required class="form-items w-50 " type="text" name="ulke" id="ulke">
            </div>
            <div class="w-50 form-group d-flex justify-content-xl-around">
                <label class="form-items  w-25  " for="il">İl</label>
                <input required class="form-items  w-50" type="text" name="il" id="il">
            </div>
        </div>
        <div class="d-flex">
            <div class="w-50 form-group d-flex justify-content-xl-around">
                <label class="form-items  w-25" for="ilce">Ilçe</label>
                <input required class="form-items w-50" type="text" name="ilce" id="ilce">
            </div>
            <div class="w-50 form-group d-flex justify-content-xl-around">
                <label class="form-items  w-25" for="zipKodu">Zip Kodu</label>
                <input required class="form-items w-50" type="text" name="zipKodu" id="zipKodu">
            </div>
        </div>

        <div class="w-100 form-group d-flex justify-content-xl-around">
            <label class="form-items mr-5 " for="adress">Adress</label>
            <input required class="form-items w-75" type="text" name="adress" id="adress">
        </div>
        <div class="d-flex justify-content-center">
            <input required class="btn btn-success w-100 text-center" type="submit" value="Gönder">
        </div>
    </form>


</div>
</div>

@endsection