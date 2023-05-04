@extends('Shared._profile')



@section('menubar')

<div class="card">

<div class="text-center card-header">
<h2>PROFİL</h2>
</div>

<div class="card-body">
<div class="form-group d-flex flex-column">
    <label class="form-items" for="username">Kullanici Adi</label>
    <input class="form-items" type="text" value="{{ auth()->user()->name }}" name="username" disabled>
</div>
<div class="form-group d-flex flex-column">
    <label class="form-items" for="emailAdress" >Email Adress</label>
    <input class="form-items" type="email" name="emailAdress" value="{{ auth()->user()->email }}" disabled>
</div>

<form method="post" action="{{route('freezeUser')}}">
    @csrf
    <input name="userId" type="text" value='{{auth()->user()->id}}' hidden>

<button class="btn btn-danger w-100" type="submit">Devre Dışı Birak</button>
</form>
</div>
</div>



@endsection