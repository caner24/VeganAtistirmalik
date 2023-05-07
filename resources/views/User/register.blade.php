@extends('Shared._loginLayout')


@section('errors')
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $hatalar)
    <li>{{ $hatalar }}</li>

</ul>
@endforeach
@endif
@endsection
@section('forms')
<form method="POST" action="{{ route('postRegister') }}">
    @csrf
    <div style=" display: flex;flex-direction: column">
        <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExNDcxNDU2NzU3ZDM4MWE1MDA5NGZlNGMzMzc4OGQ4YzdmZDQ3Y2U2MCZjdD1n/Tg14XpWR00P6Ax78VS/giphy.gif" alt="">
        <input type="text" name="name" id="name" placeholder="name" />
        <input type="password" name="password" id="password" placeholder="password" />
        <input type="email" name="email" id="email" placeholder="email address" />
        <button type="submit">Kayit Ol</button>
        <p class="message">Hesabınız zaten varmı <a href="{{ route('login') }}">Giriş Yap </a></p>
    </div>
</form>
@endsection