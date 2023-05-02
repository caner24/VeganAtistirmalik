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
    <form method="POST" action="{{ route('postLogin') }}">
        @csrf
        <div style=" display: flex;flex-direction: column">
            <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExNDcxNDU2NzU3ZDM4MWE1MDA5NGZlNGMzMzc4OGQ4YzdmZDQ3Y2U2MCZjdD1n/Tg14XpWR00P6Ax78VS/giphy.gif"
                alt="">
            <input style="margin-top: 1%" type="email" name="email" id="email" placeholder="email" />
            <input type="password" name="password" id="password" placeholder="password" />
            <button>Giriş Yap</button>
            <p class="message">Hesabınız yok mu ? <a href="{{ route('register') }}">Kayit Ol </a></p>
        </div>

    </form>
@endsection
