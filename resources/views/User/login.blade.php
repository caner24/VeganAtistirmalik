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
        <input type="email" name="email" id="email" placeholder="email" />
        <input type="password" name="password" id="password" placeholder="password" />
        <button>login</button>
        <p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
    </form>
@endsection
